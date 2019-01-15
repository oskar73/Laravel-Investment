<x-app-layout :assets="$assets ?? []" title='Choice JS' :isBanner="true" isChoisejs="true">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Choicejs</h4>
                            </div>
                        </div>
                        <small>For more Information regarding Choicejs Plugin refer
                            <a href="https://mohistory.org/node_modules/choices.js/">Documentation</a>
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
                        <h4 class="card-title">A Basic</h4>
                        <p>In this method, selecting only one option from a lots of options while only using up as much
                            space as a single option excepted.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select class="form-control" id="choices-basic">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Multiple Choice</h4>
                        <p>when the multiple attribute is used with the select element, we can enable the selection of
                            multiple options from the list.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select multiple class="form-control choices-multiple-remove-button">
                        <option value="Choice 1" selected>Choice 1</option>
                        <option value="Choice 2">Choice 2</option>
                        <option value="Choice 3">Choice 3</option>
                        <option value="Choice 4">Choice 4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Text Inputs</h4>
                        <p>An input element can be displayed in many ways, depending on the type attribute. Displays a
                            single-line text input field.</p>
                    </div>
                </div>
                <div class="card-body">
                    <input class="form-control" id="choices-remove-button" type="text" />
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Option Group</h4>
                        <p>The optgroup tag is used to group related options in a select element (drop-down list).</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="box">
                        <select class=" form-control" id="choices-optiongroup">
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                            </optgroup>
                            <optgroup label="France">
                                <option value="Paris">Paris</option>
                                <option value="Marseille">Marseille</option>
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
                        <h4 class="card-title">Dropdown Items</h4>
                        <p>A dropdown allows a user to select a value from a series of options. A selection dropdown can
                            allow multiple search selections.</p>
                    </div>
                </div>
                <div class="card-body">
                    <select name="form-control" id="choices-dropdown">
                        <option value="Dropdown item 1">Dropdown item 1</option>
                        <option value="Dropdown item 2">Dropdown item 2</option>
                        <option value="Dropdown item 3">Dropdown item 3</option>
                        <option value="Dropdown item 4">Dropdown item 4</option>
                        <option value="Dropdown item 5">Dropdown item 5</option>
                        <option value="Dropdown item 6">Dropdown item 6</option>
                        <option value="Dropdown item 7">Dropdown item 7</option>
                        <option value="Dropdown item 8">Dropdown item 8</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Items Input</h4>
                        <p>A dropdown allows a user to select a value from a series of options(Limit is 5 items).</p>
                    </div>
                </div>
                <div class="card-body text-left">
                    <select multiple class="form-control" id="choices-selectitem">
                        <option value="Item 1">Item 1</option>
                        <option value="Item 2">Item 2</option>
                        <option value="Item 3">Item 3</option>
                        <option value="Item 4">Item 4</option>
                        <option value="Item 1">Item 5</option>
                        <option value="Item 2">Item 6</option>
                        <option value="Item 3">Item 7</option>
                        <option value="Item 4">Item 8</option>
                        <option value="Item 1">Item 9</option>
                        <option value="Item 2">Item 10</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Only Email Address</h4>
                        <p>An email address identifies an email box to which messages are delivered.Only Email type content
                            is available.</p>
                    </div>
                </div>
                <div class="card-body">
                    <input class="form-control" id="choices-email-filter" type="text" placeholder="This is a placeholder">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Email Disable</h4>
                        <p>An email address identifies an email box to which messages are delivered.Only Email type content
                            is available.</p>
                    </div>
                </div>
                <div class="card-body">
                    <input class="form-control" id="choices-text-disabled" type="text"
                        value="josh@joshuajohnson.co.uk, joe@bloggs.co.uk" placeholder="This is a placeholder" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
