/**
 * Module: TYPO3/CMS/BootstrapExample/FormEngine/Element/BootstrapIconsElementFontAwesomeHook
 * 
 * This class will be registered as hook to the BootstrapIconsElement and called from the parent class.
 * It provides the initialization constructor() and getKey().
 * And the three main methods used by the parent class:
 * - initFilter()
 * - runFilter()
 * - createPreviewIcon()
 * 
 * @see ext_localconf.php
 * @see \LBRmedia\Bootstrap\Form\Element\BootstrapIconsElement
 * @see TYPO3/CMS/Bootstrap/FormEngine/Element/BootstrapIconsElement
 * 
 */
 define(function() {
    return class {
        /**
         * The iconset key.
         */
        key = 'fa6';

        /**
         * @param TYPO3/CMS/Bootstrap/FormEngine/Element/BootstrapIconsElement
         * @return void
         */
        constructor(parent)
        {
            this.parent = parent;
        }

        /**
         * @return string The iconset key.
         */
        getKey() {
            return this.key;
        }

        /**
         * @return void
         */
        initFilter() {
            // collect icons
            let iconElements = this.parent.iconsContainer.querySelectorAll(".fa6-icon");
            
            // build icons list with search values
            this.icons = [];
            let parent = this.parent;
            for (var i = 0; i < iconElements.length; i++){
                let search = [];
                let value = "";

                const labelTag = iconElements[i].querySelector(".icon-name");
                if (labelTag) {
                    search.push(labelTag.innerHTML.toLowerCase());
                }

                const iTag = iconElements[i].querySelector("i");
                if (iTag) {
                    value = iTag.getAttribute("class");
                    search.push(value.toLowerCase());
                }

                if (search.length && value) {
                    this.icons.push({
                        iconElement: iconElements[i],
                        search: search.join(" "),
                        value: value
                    });

                    iconElements[i].setAttribute("data-fa6icon-value", value);
                    iconElements[i].addEventListener("click", function (evt) {
                        const value = this.getAttribute("data-fa6icon-value");
                        if (value) {
                            parent.currentValue = value;
                            parent.updateValues();
                        }
                    });
                }
            }
        }

        /**
         * @return void
         */
        runFilter(value) {
            if (value) {
                // filter icons
                for (let i = 0; i < this.icons.length; i++) {
                    if (this.icons[i].search.indexOf(value) > -1) {
                        this.icons[i].iconElement.style.display = "inline-block";
                    } else {
                        this.icons[i].iconElement.style.display = "none";
                    }
                }
            } else {
                // no search: show all
                for (let i = 0; i < this.icons.length; i++) {
                    this.icons[i].iconElement.style.display = "inline-block";
                }
            }
        }

        /**
         * @return void
         */
        createPreviewIcon() {
            this.parent.previewContainer.innerHTML = "";

            var icon = document.createElement("i");
            icon.setAttribute("class", this.parent.currentValue);

            this.parent.previewContainer.appendChild(icon);
        }
    }
});
