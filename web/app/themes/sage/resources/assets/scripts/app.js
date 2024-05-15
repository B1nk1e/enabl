// External Dependencies
import { router } from 'js-dom-router';

// Standard imports
import common from './route/common';

// Standard init
common();

// Dynamic imports
const cases = async () => import(/* webpackChunkName: "scripts/route/single-project" */ './route/cases');

// DOM-based init
// .on(<name of body class>, callback)
router
    .on('page-template-cases-overview', async (event) => (await cases()).default(event))
    .ready();
