class Localization {
    constructor({ messages }) {
        this.messages = messages;
    }
    get(key, replace = {}) {
        let message = this.messages[key] || key;
        let replacedMessage = "";

        for (const [key, value] of Object.entries(replace)) {
            replacedMessage = message.replace(":" + key, value);
        }

        return replacedMessage || message;
    }
}

window.Localization = Localization;
