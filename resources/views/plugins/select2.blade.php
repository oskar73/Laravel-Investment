<x-app-layout :assets="$assets ?? []" title='Select-2' :isBanner="true" :isSelect2="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Select2</h4>
                            </div>
                        </div>
                        <small>For more Information regarding Select2 Plugin refer
                            <a href="https://select2.org/">Documentation</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Single select boxes</h4>
                        <p>Select2 can take a regular select box. By default it supports all options and operations that are available in a standard select box,but with added flexibility.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-basic-single js-states form-select form-control" name="state" style="width: 100%;">
                        <option value="AL">Alabama</option>
                        <option value="Am">Amalapuram</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Colorada">Colorada</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Montana">Montana</option>
                        <option value="An">Anakapalli</option>
                        <option value="Ak">Akkayapalem</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="New Maxico">New Maxico</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Utah">Utah</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Multiple select boxes</h4>
                        <p>Select2 also supports multi-value select boxes. The select below is declared with the multiple attribute. We can select multiple data in One time.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body-inner">
                        <select class="select2-basic-multiple js-states form-control" name="states[]" multiple="multiple" style="width: 100%;">
                            <optgroup label="pacific Time zone">
                                <option value="California">California</option>
                                <option value="Nevada">Nevada</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Washington">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time zone">
                                <option value="Arizona">Arizona</option>
                                <option value="Colorada">Colorada</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="New Maxico">New Maxico</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Utah">Utah</option>
                                <option value="Wyoming">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time zone">
                                <option value="Alabama">Alabama</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="Lowa">Lowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Texas">Texas</option>
                                <option value="South Dakota">South Dakota</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Illinois">Illinois</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Disabled Results</h4>
                        <p>Select2 will correctly handle disabled results, both with data coming from a standard select (when the disabled attribute is set) and from remote sources, where the object has disabled: true set.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-disabled js-states form-control" style="width: 100%;">
                        <option value="one">First</option>
                        <option value="two" disabled="disabled">Second (disabled)</option>
                        <option value="three">Third</option>
                        <option value="four">Four</option>
                        <option value="five" disabled="disabled">Five (disabled)</option>
                        <option value="six">Six</option>
                        <option value="seven">Seven</option>
                        <option value="eight">Eight</option>
                        <option value="nine" disabled="disabled">Nine (disabled)</option>
                        <option value="ten">Ten</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Limiting the number of selections</h4>
                        <p>Select2 multi-value select boxes can set restrictions regarding the maximum number of options selected. The select below is declared with the multiple attribute with maximumSelectionLength.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-multiple-limit js-states form-control w-full"  multiple="multiple" style="width: 100%;">
                        <optgroup label="pacific Time zone">
                            <option value="California">California</option>
                            <option value="Nevada">Nevada</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Washington">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time zone">
                            <option value="Arizona">Arizona</option>
                            <option value="Colorada">Colorada</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="New Maxico">New Maxico</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Utah">Utah</option>
                            <option value="Wyoming">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time zone">
                            <option value="Alabama">Alabama</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="Lowa">Lowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Texas">Texas</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Illinois">Illinois</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Theme Support</h4>
                        <p>Select2 supports custom themes using the theme option so you can style Select2 to match the rest of your application.These examples use the classic theme.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-theme-single js-states form-control" name="state" style="width: 100%;">
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                            </optgroup>
                            <optgroup label="France">
                                <option value="Paris">Paris</option>
                                <option value="Marseille">Marseille</option>
                            </optgroup>
                            <optgroup label="Mountain Time zone">
                                <option value="Arizona">Arizona</option>
                                <option value="Colorada">Colorada</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="New Maxico">New Maxico</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Utah">Utah</option>
                                <option value="Wyoming">Wyoming</option>
                            </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Placeholder</h4>
                        <p>A placeholder value can be defined and will be displayed until a selection is made. Select2 uses the placeholder attribute on multiple select boxes</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-placeholder js-states form-control" name="state" style="width: 100%;">
                        <optgroup label="UK">
                            <option value="London">London</option>
                            <option value="Manchester">Manchester</option>
                        </optgroup>
                        <optgroup label="Mountain Time zone">
                            <option value="Arizona">Arizona</option>
                            <option value="Colorada">Colorada</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="New Maxico">New Maxico</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Utah">Utah</option>
                            <option value="Wyoming">Wyoming</option>
                        </optgroup>
                        <optgroup label="France">
                            <option value="Paris">Paris</option>
                            <option value="Marseille">Marseille</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Dynamic Option Creation</h4>
                        <p>In addition to a prepopulated menu of options, Select2 can dynamically create new options from text input by the user in the search box. This feature is called "tagging". To enable tagging, set the tags option to true:</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class=" select2-option-creation form-control" name="state" style="width: 100%;">
                    <option>orange</option>
                    <option>white</option>
                    <option>purple</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Multi value Select Boxes</h4>
                        <p>Tagging can also be used in multi-value select boxes. In the example below, we set the multiple="multiple" attribute on a Select2 control that also has tags: true enabled:</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="select2-placeholder select2-option-creation form-control" multiple="multiple">
                    <option selected="selected">orange</option>
                    <option>white</option>
                    <option>purple</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Automatic Tokenization into tags</h4>
                        <p>Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma. The separators that should be used when tokenizing can be specified using the tokenSeparators options.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class=" select2-automatic-tokenizer form-control" multiple="multiple">
                    <option selected="selected">orange</option>
                    <option>white</option>
                    <option>purple</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



