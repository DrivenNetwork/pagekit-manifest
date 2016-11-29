<?php $view->script('manifest', 'manifest:js/manifest.js', ['vue']) ?>

<section id="manifest">
    <div class="uk-margin-large-bottom uk-flex uk-flex-space-between" data-uk-margin>
        <h1 class="uk-margin-remove">{{ 'Web App Manifest' | trans }}</h1>
        <div data-uk-margin>
            <button class="uk-button uk-button-primary" @click="save()">{{ 'Save' | trans }}</button>
        </div>
    </div>

    <div class="uk-flex uk-flex-space-between" data-uk-margin>
        <div data-uk-margin>
            <p>The web app manifest provides information about an application (such as name, author, icon, and
                description) in a text file. The purpose of the manifest is to install web applications to the
                homescreen of a device, providing users with quicker access and a richer experience.
            </p>
            <a href="https://developer.mozilla.org/en-US/docs/Web/Manifest" target="_driven">READ MORE</a>
        </div>

    </div>
    <hr/>

    <div class="uk-form uk-form-horizontal uk-margin-top">

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Language' | trans }}</label>
            <div class="uk-form-controls">
                <input class="uk-form-width-large" :placeholder="'en' | trans"
                       v-model="manifest.lang"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Name' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-name" class="uk-form-width-large" :placeholder="'Name' | trans"
                       v-model="manifest.name"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Short Name' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-name" class="uk-form-width-large" :placeholder="'Short Name' | trans"
                       v-model="manifest.short_name"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-description" class="uk-form-label">{{ 'Description' | trans }}</label>
            <div class="uk-form-controls">
                <textarea id="form-description" class="uk-form-width-large" :placeholder="'Description' | trans"
                          v-model="manifest.description"></textarea>
            </div>
        </div>

        <hr/>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Scope' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-name" class="uk-form-width-large" :placeholder="'/' | trans"
                       v-model="manifest.scope"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Start URL' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-name" class="uk-form-width-large" :placeholder="'/' | trans"
                       v-model="manifest.start_url"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Display' | trans }}</label>
            <div class="uk-form-controls">

                <div data-uk-form-select id="form-name" class="uk-form-select uk-button"
                     :placeholder="'Display' | trans">
                    <span></span>
                    <select v-model="manifest.display">
                        <option v-for=" display in options.display" value="{{display}}">{{display}}</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Orientation' | trans }}</label>
            <div class="uk-form-controls">

                <div data-uk-form-select id="form-name" class="uk-form-select uk-button"
                     :placeholder="'Orientation' | trans">
                    <span></span>
                    <select v-model="manifest.orientation">
                        <option v-for=" orientation in options.orientation" value="{{orientation}}">{{orientation}}
                        </option>
                    </select>
                </div>

            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Theme Color' | trans }}</label>
            <div class="uk-form-controls uk-form-width-large">
                <input type="color" v-model="manifest.theme_color"/>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-name" class="uk-form-label">{{ 'Background Color' | trans }}</label>
            <div class="uk-form-controls">
                <input type="color" v-model="manifest.background_color"/>
            </div>
        </div>

        <hr/>
        <h3>{{ 'Icons' | trans }}</h3>

        <div class="uk-form-row" v-for="icon in manifest.icons">

            <label for="form-name" class="uk-form-label uk-text-small">
                <span>
                    <strong>Size:</strong> {{icon.size}}
                </span>
                <br/>
                <span>
                    <strong>Density:</strong> {{icon.density}}
                </span>
                <br/>
                <span>
                    <strong>Type:</strong> {{icon.type}}
                </span>
            </label>
            <div class="uk-form-controls">
                <input-image :source.sync="icon.src"></input-image>
            </div>
        </div>

    </div>
</section>