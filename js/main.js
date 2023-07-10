import {chatBot} from './chatBot.js';
chatBot();

import {validation} from './validation.js';
validation();

import {modalApplication} from './modalAppplication.js';
modalApplication();

import {modalContacts} from './modalConntacts.js';
modalContacts();

import {animation} from './animation.js';
animation();

import {navigationTitle} from './navigationTitle.js';
navigationTitle();

import {inputForm} from './inputForm.js';
inputForm();

import {headerBurger} from './headerBurger.js';
headerBurger();

import {articleCount} from './articleCount.js';
articleCount();




const contentful = require('contentful');

    // Замените <CONTENTFUL_SPACE_ID> и <CONTENTFUL_ACCESS_TOKEN> соответствующими значениями
    const SPACE_ID = '<5f0qcp0syfsf>';
    const ACCESS_TOKEN = '<G4bxZvMZa5AB58gv1nSbUDbP_rdyT1TMAn57-uZSYoo>';
    const ORGANIZATION_ID = '3Yx4Fi2moxq2zsWWZ00rG8';

    const client = contentful.createClient({
    space: SPACE_ID,
    accessToken: ACCESS_TOKEN
    });

    client.getOrganization(ORGANIZATION_ID)
    .then(response => {
        const organization = response.items[0];
        console.log(organization);
        // Обрабатывайте организацию по своему усмотрению
    })
    .catch(error => {
        console.log('Ошибка при получении данных:', error);
    });
// import {phoneValidCantry} from './phoneValidCantry.js';
// phoneValidCantry();



