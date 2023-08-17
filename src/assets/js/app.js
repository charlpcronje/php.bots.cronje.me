'use strict';

heepp.app = class {
    constructor() {

    }
};
// Important: This class must be a singleton
let appInstance = null;

// main application singleton
class App {
    constructor() {
        this.windowHeight = function() {
            return $(window).height();
        };
        this.windowWidth = function() {
            return $(window).width();
        };
        // This checks if the instance has been instantiated
        if(!appInstance) {
            // If there is no instance, create one for us.
            appInstance = this;
        }

        // Property for each part of the app
        this.sessionExists = false;
        this.console       = {};
        this.settings      = {};
        this.projects      = {};
        this.shortcuts     = {};
        this.login         = {};
        this.dashboard     = {};
        this.data          = {};
        this.common        = {};
        this.nav           = {};
        this.ui            = {};

        // Return the instance
        return appInstance;
    }
}
heepp.app = new App();
