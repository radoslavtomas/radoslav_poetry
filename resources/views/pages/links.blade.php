@extends('layouts.pages')


@section('content')


        <section class="hero is-medium">
            <div class="container">
            <div class="hero-body">
                <div class="wrapper" id="rev-3">
                    <h1 class="title is-poiret">
                        Links
                    </h1>
                    <h2 class="subtitle">
                        to some interesting stuff
                    </h2>

                </div>
            </div>
            </div>
        </section>
        <section class="section is-links">
            <div class="columns">
                <div class="column is-8 is-offset-2 has-text-centered">
                    <h3 class="is-size-3 is-poiret m-b-20">Interviews</h3>
                    <ul class="myInterviews">
                        <li class="myInterview"><small>sme.sk</small> - <a href="#">To, že rozmýšľam nad básňami, zo mňa nerobí lepšieho človeka</a></li>
                        <li class="myInterview"><small>bookportrait.sk</small> - <a href="#">Strážay v interiéri Radoslava Tomáša</a></li>
                        <li class="myInterview"><small>CIL</small> - <a href="#">Profile in The Centre for Information on Literature</a></li>
                        <li class="myInterview"><small>martinus.sk</small> - <a href="#">Poézia nie je zisková, je to záležitosť menšiny</a></li>
                    </ul>
                    <h3 class="is-size-3 is-poiret m-b-20">Video</h3>
                    <div class="videoWrapper">
                        <iframe width="482" height="270" border="0" frameborder="0" scrolling="no" style="padding:0px; margin:0px; border: 0px;" src="//www.sme.sk/vp/17238/" allowFullScreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    @stop

    @section('styles')
        <style>
            .hero {
                background: url('/img/links.jpg') center center no-repeat;
                background-size: cover;
                /*background-attachment: fixed;*/
            }

            .hero h1 {
                color: white;

            }
            .hero h2 {
                color: white;
            }
            .wrapper {
                display: inline-block;
                padding: 15px 25px;
                background-color: rgba(0,0,0,.4);
            }

            .myInterviews {
                overflow: hidden;
                padding: 15px 10px;
            }

            .myInterview {
                margin-bottom: 20px;
            }

            .myInterview small {
                color: #B9121B;
            }

            .myInterview a {
                color: #4a4a4a;
                position: relative;
                overflow: hidden;
            }

            .myInterview a:before {
                content: '';
                width: 100%;
                height: 1px;
                background-color: #B9121B;
                position: absolute;
                top: 0;
                left: 500%;
                transition: left 0.3s ease-in-out;
            }
            .myInterview a:hover:before {
                left: 0;
                transition: left 0.3s ease-in-out;
            }

            .myInterview a:after {
                content: '↗';
                position: absolute;
                font-size: 16px;
                top: -16px;
                right: -9999px;
                color: #B9121B;
                transition: right 0.3s ease-in-out;
            }

            .myInterview a:hover:after {
                right: -9px;
                transition: right 0.3s ease-in-out;
            }

            .videoWrapper {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                padding-top: 25px;
                height: 0;
            }
            .videoWrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>

    @stop

    @section('scripts')

        <script src="/js/anime.min.js"></script>
        <script src="/js/main.js"></script>

        <script>
            var rev1 = new RevealFx(document.querySelector('#rev-3'), {
                revealSettings: {
                    bgcolor: '#ba68c8',
                    duration: 1000,
                    onCover: function (contentEl, revealerEl) {
                        contentEl.style.opacity = 1;
                    }
                }
            });
            rev1.reveal();
        </script>

    @stop