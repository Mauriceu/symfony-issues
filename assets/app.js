import {startStimulusApp} from '@symfony/stimulus-bundle';

// added lazy-loading for all controllers (they need the simulusFatch: lazy comment
const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);