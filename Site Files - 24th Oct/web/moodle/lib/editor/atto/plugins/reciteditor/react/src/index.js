// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto HTML editor
 *
 * @package    atto_reciteditor
 * @copyright  2019 RECIT
 * @license    {@link http://www.gnu.org/licenses/gpl-3.0.html} GNU GPL v3 or later
 */

import React from 'react';
import { createRoot } from 'react-dom/client';
import {RecitEditor, UtilsMoodle} from './libs/reciteditor/RecitEditor';
import {Options} from './Options';

if(process.env.NODE_ENV === "development"){    
    console.log(`Dev: ${Options.appName()} - v:${Options.appVersion()}`);
}
else{
    console.log(`Prod: ${Options.appName()} - v:${Options.appVersion()}`); 
}

let attoInterface = UtilsMoodle.getAttoInterface();
let domContainer = document.getElementById('root');
const root = createRoot(domContainer);
root.render(<RecitEditor content={attoInterface.getContent()} onSaveAndClose={attoInterface.setContent} />);