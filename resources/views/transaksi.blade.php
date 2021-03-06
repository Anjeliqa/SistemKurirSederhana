<!DOCTYPE html>
<html lang="en">
  
@include('layout.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            @include('layout.profile')
            <br />

          @include('layout.sidebar')

            @include('layout.footer')
          </div>
        </div>

        @include('layout.topnavigation')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Form pengiriman</h3>
                </div>
  
                <div class="title_right">
                  <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
  
              <div class="row">
  
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Form pengiriman </h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
  
  
                      <!-- Smart Wizard -->
                      <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                      <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                          <li>
                            <a href="#step-1">
                              <span class="step_no">1</span>
                              <span class="step_descr">
                                                Step 1<br />
                                                <small>Step 1 description</small>
                                            </span>
                            </a>
                          </li>
                          <li>
                            <a href="#step-2">
                              <span class="step_no">2</span>
                              <span class="step_descr">
                                                Step 2<br />
                                                <small>Step 2 description</small>
                                            </span>
                            </a>
                          </li>
                          <li>
                            <a href="#step-3">
                              <span class="step_no">3</span>
                              <span class="step_descr">
                                                Step 3<br />
                                                <small>Step 3 description</small>
                                            </span>
                            </a>
                          </li>
                        </ul>
                        <div id="step-1">
                          <form class="form-horizontal form-label-left">
  
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" required="required" class="form-control  ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Middle Name / Initial</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input id="middle-name" class="form-control col" type="text" name="middle-name">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                              <div class="col-md-6 col-sm-6 ">
                                <div id="gender" class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                    <input type="radio" name="gender" value="male" class="join-btn"> &nbsp; Male &nbsp;
                                  </label>
                                  <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                    <input type="radio" name="gender" value="female" class="join-btn"> Female
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input id="birthday" class="date-picker form-control" required="required" type="text">
                              </div>
                            </div>
  
                          </form>
  
                        </div>
                        <div id="step-2">
                          <h2 class="StepTitle">Step 2 Content</h2>
                          <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No Telepon <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="first-name" required="required" class="form-control  ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kode Pos <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="last-name" name="last-name" required="required" class="form-control ">
                              </div>
                            </div>
                        </div>
                        <div id="step-3">
                          <h2 class="StepTitle">Step 3 Content</h2>
                          <p>
                            dengan menekan tombol submit maka pesanan akan segera diproses untuk segera dikirim oleh kurir
                          </p>
                        </div>
  
                      </div>
                      <!-- End SmartWizard Content -->
  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @include('layout.scripts')
	
  </body>
</html>
