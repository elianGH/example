class DOM
{
    createElement(tagName, className = null, idName = null, text = null) {
        const element = document.createElement(tagName);

        if(className) {
            element.className = className;
        }

        if(idName) {
            element.id = idName;
        }

        if(text) {
            this.text(text, element);
        }

        return element;
    }

    text(text, element) {
        element.appendChild(document.createTextNode(text));
    }
}

export default DOM;
