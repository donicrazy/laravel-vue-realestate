@extends('layouts.main')
@section('title', "Welcome")

@section('content')
<div class="intro-bg">
    <div class="page-title-row">
        <div class="row">
            <div class="col-xs-12">
                <h2>Our Services</h2>
                <p>Explore our automated Investor Servicing Portal or lead the way for CRE 2.0 and create your first Digital Security with our Primary Issuance Platform.</p>
            </div>
        </div>
    </div>
    <div class="page-container">
        <div class="row text-center center-xs margin-bottom-l">
            <div class="col-xs-12 col-md-6 margin-bottom-m">
                <div class="intro-card">
                    <div class="intro-card__title">
                        Traditional Investor Servicing and Reporting
                    </div>
                    <div class="intro-card__facts">
                        <ol>
                            <li>Input basic sponsor information</li>
                            <li>Enter property details and photos</li>
                            <li>Upload cap table and history of distributions</li>
                        </ol>
                    </div>
                    <div class="intro-card__content">
                        <img src="/img/intro-laptop.jpg"/>
                        <div class="small-text investor-servicing">Your investors will see a dashboard of their real estate investments as well as your new offerings.</div>
                    </div>
                </div>
                <div class="intro-action">
                <a href="/investor-servicing/choose-investment" class="btn intro-btn">Start now</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 margin-bottom-m">
                <div class="intro-card">
                    <div class="intro-card__title">
                        Create Digital Securities (includes Servicing and Reporting)
                    </div>
                    <div class="intro-card__facts">
                        <ol>
                            <li>Provide sponsor diligence inputs</li>
                            <li>Enter property photos, infos and investment details</li>
                            <li>Upload due diligence documents</li>
                            <li>Choose your own digital security symbol</li>
                        </ol>
                    </div>
                    <div class="intro-card__content">
                        <img src="/img/intro-blockchain.jpg"/>
                        <div class="small-text security">Convert ownership of an existing property  or fund or a new offering into a digital format.</div>
                    </div>
                </div>
                <div class="intro-action">
                    <a href="/account-settings/verification" class="btn intro-btn">Start now</a>
                </div>
            </div>
        </div>
        <div class="row center-xs">
            <div class="col-xs-12 col-md-4 col-lg-2">
            <a href="#" class="btn intro-btn full-width">Schedule Demo</a>
            </div>
        </div>
    </div>
</div>
@endsection
