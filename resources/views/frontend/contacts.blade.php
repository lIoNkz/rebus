@extends('frontend.layouts.master')
@section('head')
    <title>Контакты Rebus</title>
@endsection

@section('content')
<section id="page-title">

    <div class="container clearfix">

        <h1>Contacts</h1>

        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Contacts</li>
        </ul>
    </div>

</section>

<section id="content">
    
    <div class="content-wrap">

        <div class="container site-contact clearfix">
    <div class="row">
        <div class="col_two_fifth">
            <div class="col_full">
                <div class="feature-box fbox-small fbox-outline fbox-dark fbox-effect">
                    <div class="fbox-icon col_one_sixth">
                        <i class="i-alt noborder icon-map-marker"></i>
                    </div>
                    <div class="col_five_sixth col_last">
                        <h5>HEAD OFFICE IN SEOUL</h5>
                        <p>Address:	SOuth Korea, Seoul, PyohnHang district, Max st., 2</p>
                    </div>
                </div>
            </div>
            <div class="col_full">
                <div class="feature-box fbox-small fbox-outline fbox-dark fbox-effect">
                    <div class="fbox-icon col_one_sixth">
                        <i class="i-alt noborder icon-call"></i>
                    </div>
                    <div class="col_five_sixth col_last">
                        <h5>PHONE</h5>
                        <p>Phone: +998 (71) 148-88-88; +998 (71) 150-77-07; Service Centre: +998 (71) 148-88-88</p>
                    </div>
                </div>
            </div>
            <div class="col_full">
                <div class="feature-box fbox-small fbox-outline fbox-dark fbox-effect">
                    <div class="fbox-icon col_one_sixth">
                        <i class="i-alt noborder icon-email3"></i>
                    </div>
                    <div class="col_five_sixth col_last">
                        <h5>E-mail</h5>
                        <p>info@lg.com</p>
                    </div>
                </div>
            </div>
            <div class="col_full">
                <div class="feature-box fbox-small fbox-outline fbox-dark fbox-effect">
                    <div class="fbox-icon col_one_sixth">
                        <i class="i-alt noborder icon-globe"></i>
                    </div>
                    <div class="col_five_sixth col_last">
                        <h5>INTERNATIONAL INQUIRIES</h5>
                        <p>Phone: +998 (71) 202-77-88; E-mail: info@lg.com</p>
                    </div>
                </div>
            </div>        </div>

        <div class="col_three_fifth col_last">
            <form id="contact-form" action="#" method="post" role="form">
<input type="hidden" name="_csrf" value="bDNZZ01oZDMCWTcTfRkdRDZlKg5.BAxbHlovIxk/HGcldRE4Nxs.Cw==">
            <div class="form-group field-contactform-name required">
<label class="control-label" for="contactform-name">Name</label>
<input type="text" id="contactform-name" class="sm-form-control" name="ContactForm[name]" required="required">

<p class="help-block help-block-error"></p>
</div>
            <div class="form-group field-contactform-email required">
<label class="control-label" for="contactform-email">Email</label>
<input type="email" id="contactform-email" class="sm-form-control" name="ContactForm[email]" required="required">

<p class="help-block help-block-error"></p>
</div>
            <div class="form-group field-contactform-subject required">
<label class="control-label" for="contactform-subject">Subject</label>
<input type="text" id="contactform-subject" class="sm-form-control" name="ContactForm[subject]" required="required">

<p class="help-block help-block-error"></p>
</div>
            <div class="form-group field-contactform-body required">
<label class="control-label" for="contactform-body">Text</label>
<textarea id="contactform-body" class="sm-form-control" name="ContactForm[body]" rows="9" required="required"></textarea>

<p class="help-block help-block-error"></p>
</div>
            <button type="submit" class="button button-small pull-right" name="contact-button">Send</button>
            </form>        </div>
    </div>

</div>

<div class="google-map clear-bottommargin-lg">
    </div>
    </div>
</section>    <!-- #content end -->

@endsection