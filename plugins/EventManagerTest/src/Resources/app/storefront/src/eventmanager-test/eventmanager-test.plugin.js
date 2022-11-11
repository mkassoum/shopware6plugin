import Plugin from "src/plugin-system/plugin.class";

const eventName = document.getElementById("event-name1");
let linkEnd = "shopware6";
const pageLink = "https://www.google.com/search?q=" + linkEnd;
eventName.href = pageLink;

export default class EventManagerPlugin extends Plugin {
    static options = {
        /**
         * Specifies the text that is prompted to the user
         * @type string
         */
        text: "Seems like there's nothing more to see here.",
    };

    init() {}

    onScroll() {
        if (
            window.innerHeight + window.pageYOffset >=
            document.body.offsetHeight
        ) {
            console.log("sdsadadad");
        }
    }
}
