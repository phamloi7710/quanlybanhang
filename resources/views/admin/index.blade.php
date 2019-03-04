@extends('admin.general.master')
@section('content') 
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Bordered Navigation</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Navigation</a>
                            </li>
                            <li class="breadcrumb-item active">Bordered Navigation
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                        type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
                        <a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
                        <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
                        <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Description -->
            <section id="description" class="card">
                <div class="card-header">
                    <h4 class="card-title">Description</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>Bordered navigation separate first level of main navigation by adding
                                border. You can check bordered navigation on left side navigation
                                menu.
                            </p>
                        </div>
                        <div class="alert bg-success alert-icon-left mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-pencil-square"></i></span>
                            <strong>Experience it!</strong>
                            <p>This page contain navigation menu with bordered options example,
                                check at the left hand side of the page.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Description -->
            <!-- CSS Classes -->
            <section id="css-classes" class="card">
                <div class="card-header">
                    <h4 class="card-title">CSS Classes</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This table contains all classes related to the vertical bordered
                                navigation option.
                            </p>
                            <p>All these options can be set via following classes:</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Classes</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>.menu-bordered</code></th>
                                            <td>To create vertical bordered navigation, you need to add <code>.menu-bordered</code>                          class in navigation <code>&lt;div&gt;</code> tag. Refer
                                                HTML markup line no 12.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ CSS Classes -->
            <!-- HTML Markup -->
            <section id="html-markup" class="card">
                <div class="card-header">
                    <h4 class="card-title">HTML Markup</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>This section contains HTML Markup to create vertical bordered navigation.
                                It define where to add css classes to make vertical bordered navigation.
                            </p>
                            <ul>
                                <li>
                                    <span class="text-bold-600">Line no 12:</span> Contain the <code>.menu-bordered</code> class
                                    to set vertical navigation border.
                                </li>
                            </ul>
                            <pre data-line="12" class="language-markup">
          <code class="language-markup">
              &lt;!DOCTYPE html&gt;
                &lt;html lang="en"&gt;
                  &lt;head&gt;&lt;/head&gt;
                  &lt;body data-menu="vertical-menu" class="vertical-layout vertical-menu 2-column menu-expanded"&gt;
                    &lt;!-- navbar-static-top--&gt;
                    &lt;nav role="navigation" class="header-navbar navbar-expand-sm navbar navbar-with-menu navbar-static-top navbar-dark navbar-shadow menu-bordered"&gt;
                        ...
                    &lt;/nav&gt;
                    &lt;!-- BEGIN Navigation--&gt;
                    &lt;div class="main-menu menu-dark menu-bordered menu-shadow"&gt;
                        ...
                    &lt;/div&gt;
                    &lt;!-- END Navigation--&gt;
                    &lt;!-- BEGIN Content--&gt;
                    &lt;div class="content app-content"&gt;
                        &lt;div class="content-wrapper"&gt;
                            &lt;!-- content header--&gt;
                            &lt;div class="content-header row"&gt;
                                ...
                            &lt;/div&gt;
                            &lt;!-- content header--&gt;
                            &lt;!-- content body--&gt;
                            &lt;div class="content-body"&gt;
                                ...
                            &lt;/div&gt;
                            &lt;!-- content body--&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- END Content--&gt;
                    &lt;!-- START FOOTER DARK--&gt;
                    &lt;footer class="footer footer-dark"&gt;
                        ...
                    &lt;/footer&gt;
                    &lt;!-- START FOOTER DARK--&gt;
                  &lt;/body&gt;
                &lt;/html&gt;
          </code>
        </pre>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ HTML Markup -->
            <!-- PUG Code -->
            <section id="pug-code" class="card">
                <div class="card-header">
                    <h4 class="card-title">PUG Configuration</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-text">
                            <p>Modern Admin use PUG as template engine to generate pages and whole
                                template quickly using node js, for getting start with PUG usage
                                & template generating process please refer template documentation.
                            </p>
                            <h5 class="card-title mt-2">PUG Variables</h5>
                            <p>This table contains required PUG variables to generate vertical bordered
                                navigation.
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Block</th>
                                            <th>Variable</th>
                                            <th>Datatype</th>
                                            <th>Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>verticalMenuConfig</code></th>
                                            <td><code>menuDevider</code></td>
                                            <td><code>boolean</code></td>
                                            <td><code>true</code></td>
                                            <td><code>verticalMenuConfig</code> block has a <code>menuDevider</code>                          variable, it contains navigation border specific settings
                                                in that you need to add <code>true</code>.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="alert bg-info alert-icon-left mb-2" role="alert">
                                <span class="alert-icon"><i class="la la-info"></i></span>
                                Modern Admin Template <a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"
                                    target="_blank" class="white"><u>documentation</u></a> has full
                                list of all blocks, datatype, variables and their description table.
                                Please review it for more configuration options.
                            </div>
                            <h5 class="card-title mt-2">PUG Code</h5>
                            <p>Use following PUG code to generate page or template having vertical
                                bordered navigation.
                            </p>
                            <ul>
                                <li>
                                    <span class="text-bold-600">Line no 20-21:</span> Set vertical bordered navigation class
                                    to <code>menuDevider</code> variable value as <code>true</code>                    in <code>verticalMenuConfig</code> block.
                                </li>
                                <li>
                                    <span class="text-bold-600">Line no 27-28:</span> <code>content</code> block has content
                                    section html file included <code>include ../contents/vertical-bordered-navigation.html</code>,
                                    which can be customizable on page level.
                                </li>
                            </ul>
                            <p>If you want to use vertical bordered navigation options on page level
                                you need to define it on page it self. This template has one example
                                pug file for <code>vertical-bordered-navigation.pug</code>, however
                                you can use it on template level but it will generate whole template
                                have vertical bordered navigation.
                            </p>
                            <pre data-line="20-21, 27-28" data-line-offset="11" class="language-pug">
      <code class="language-pug">
        block pageVars
            - var pageTitle    = "Bordered Navigation"
            - var pageSubTitle = "Vertical bordered navigation menu"
            - var description  = "The bordered navigation add borders to the first level of main navigation."
            - var activeMenu   = "vertical-nav-bordered"
        extends template
        append verticalMenuConfig
            - var menuDevider = true
        append breadcrumbs
            +breadcrumbs([{url:"index.html",name:"Home"},{url:"#",name:"Navigation"}, {name:"Bordered Navigation"}])
        //- Include page content in page block
        append content
            include ../contents/vertical-nav-bordered.html
        //- Vendor CSS
        //------------------------------
        //- Add Vendor specific CSS
        append vendorcss
        //- Page CSS
        //------------------------------
        //- Add custom page specific CSS
        append pagecss
        //- Vendor JS
        //------------------------------
        //- Add vendor specific JS
        append vendorjs
        //- Page JS
        //------------------------------
        //- Add custom page specific JS
        append pagejs
      </code>
      </pre>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ PUG Code -->
        </div>
    </div>
</div>
@stop