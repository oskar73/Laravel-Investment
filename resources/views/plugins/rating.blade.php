<x-app-layout :assets="$assets ?? []" title='Rating' :isBanner="true" isBarRatting="true">
    <div class="row">
        <div class="col-lg-12">
           <div class="card">
              <div class="card-body">
                 <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="d-flex flex-wrap align-items-center">
                       <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                          <h4 class="me-2 h4">Rating</h4>
                       </div>
                    </div>
                    <small>For more Information regarding Rating Plugin refer
                       <a href="https://www.npmjs.com/package/jquery-bar-rating">Documentation</a>
                    </small>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">Square Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="square-rating" name="rating" style="display: none;">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                 </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">Horizontal Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="horizontal-rating" style="display: none;" >
                       <option value="10">10</option>
                       <option value="9">9</option>
                       <option value="8">8</option>
                       <option value="7">7</option>
                       <option value="6">6</option>
                       <option value="5">5</option>
                       <option value="4">4</option>
                       <option value="3">3</option>
                       <option value="2">2</option>
                       <option value="1" selected="selected">1</option>
                     </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">1/10 Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="bars-number" style="display: none;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                 </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">Pill Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="pill-rating" style="display: none;">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                 </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">Movie Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="movie-rating" style="display: none;">
                    <option value="Bad">Bad</option>
                    <option value="Mediocre">Mediocre</option>
                    <option value="Good">Good</option>
                    <option value="Awesome">Awesome</option>
                 </select>
              </div>
           </div>
        </div>
        <div class="col-lg-6 col-md-6">
           <div class="card">
              <div class="card-header d-flex justify-content-between">
                 <div class="header-title">
                    <h4 class="card-title">Reversed Rating</h4>
                 </div>
              </div>
              <div class="card-body">
                 <select id="example-reversed" name="rating" style="display: none;" >
                       <option value="Strongly Agree">Strongly Agree</option>
                       <option value="Agree">Agree</option>
                       <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
                       <option value="Disagree">Disagree</option>
                       <option value="Strongly Disagree">Strongly Disagree</option>
                     </select>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>
