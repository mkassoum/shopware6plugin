// Import all necessary Storefront plugins
import EventManagerPlugin from './eventmanager-test/eventmanager-test.plugin.js';

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('EventManagerPlugin', EventManagerPlugin, '[data-eventmanager-test]');
