@extends('interface.layout.master')
@section('content')
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

        .cursive {
            font-family: 'Pinyon Script', cursive;
        }

        .sans {
            font-family: 'Open Sans', sans-serif;
        }

        .bold {
            font-weight: bold;
        }

        .block {
            display: block;
        }

        .underline {
            border-bottom: 1px solid #777;
            padding: 5px;
            margin-bottom: 15px;
        }

        .margin-0 {
            margin: 0;
        }

        .padding-0 {
            padding: 0;
        }

        .pm-empty-space {
            height: 40px;
            width: 100%;
        }

        .certi {
            padding: 20px 0;
            background: #fff;
        }

        .pm-certificate-container {
            position: relative;
            width: 800px;
            height: 600px;
            background-color: #618597;
            padding: 30px;
            color: #333;
            font-family: 'Open Sans', sans-serif;
            box-shadow: 0 0 5px rgba(0, 0, 0, .5);
            /*background: -webkit-repeating-linear-gradient(
            45deg,
            #618597,
            #618597 1px,
            #b2cad6 1px,
            #b2cad6 2px
          );
          background: repeating-linear-gradient(
            90deg,
            #618597,
            #618597 1px,
            #b2cad6 1px,
            #b2cad6 2px
          );*/

            .outer-border {
                width: 794px;
                height: 594px;
                position: absolute;
                left: 50%;
                margin-left: -397px;
                top: 50%;
                margin-top: -297px;
                border: 2px solid #fff;
            }

            .inner-border {
                width: 730px;
                height: 530px;
                position: absolute;
                left: 50%;
                margin-left: -365px;
                top: 50%;
                margin-top: -265px;
                border: 2px solid #fff;
            }

            .pm-certificate-border {
                position: relative;
                width: 720px;
                height: 520px;
                padding: 0;
                border: 1px solid #E1E5F0;
                background-color: rgba(255, 255, 255, 1);
                background-image: none;
                left: 50%;
                margin-left: -360px;
                top: 50%;
                margin-top: -260px;

                .pm-certificate-block {
                    width: 650px;
                    height: 200px;
                    position: relative;
                    left: 50%;
                    margin-left: -325px;
                    top: 70px;
                    margin-top: 0;
                }

                .pm-certificate-header {
                    margin-bottom: 10px;
                }

                .pm-certificate-title {
                    position: relative;
                    top: 40px;

                    h2 {
                        font-size: 34px !important;
                    }
                }

                .pm-certificate-body {
                    padding: 20px;

                    .pm-name-text {
                        font-size: 20px;
                    }
                }

                .pm-earned {
                    margin: 15px 0 20px;

                    .pm-earned-text {
                        font-size: 20px;
                    }

                    .pm-credits-text {
                        font-size: 15px;
                    }
                }

                .pm-course-title {
                    .pm-earned-text {
                        font-size: 20px;
                    }

                    .pm-credits-text {
                        font-size: 15px;
                    }
                }

                .pm-certified {
                    font-size: 12px;

                    .underline {
                        margin-bottom: 5px;
                    }
                }

                .pm-certificate-footer {
                    width: 650px;
                    height: 100px;
                    position: relative;
                    left: 50%;
                    margin-left: -325px;
                    bottom: -105px;
                }
            }
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://kinforce.net/wiras/wp-includes/css/dist/bl`
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale'); --wp--preset--duotone--purple-yellow:
        url('#wp-duotone-purple-yellow'); --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight'); --wp--preset--duotone--magenta-yellow:
        url('#wp-duotone-magenta-yellow'); --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange'); --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px; --wp--preset--font-size--large: 36px; --wp--preset--font-size--x-large: 42px;
        } .has-black-color { color: var(--wp--preset--color--black) !important; } .has-cyan-bluish-gray-color { color:
        var(--wp--preset--color--cyan-bluish-gray) !important; } .has-white-color { color: var(--wp--preset--color--white)
        !important; } .has-pale-pink-color { color: var(--wp--preset--color--pale-pink) !important; } .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important; } .has-luminous-vivid-orange-color { color:
        var(--wp--preset--color--luminous-vivid-orange) !important; } .has-luminous-vivid-amber-color { color:
        var(--wp--preset--color--luminous-vivid-amber) !important; } .has-light-green-cyan-color { color:
        var(--wp--preset--color--light-green-cyan) !important; } .has-vivid-green-cyan-color { color:
        var(--wp--preset--color--vivid-green-cyan) !important; } .has-pale-cyan-blue-color { color:
        var(--wp--preset--color--pale-cyan-blue) !important; } .has-vivid-cyan-blue-color { color:
        var(--wp--preset--color--vivid-cyan-blue) !important; } .has-vivid-purple-color { color:
        var(--wp--preset--color--vivid-purple) !important; } .has-black-background-color { background-color:
        var(--wp--preset--color--black) !important; } .has-cyan-bluish-gray-background-color { background-color:
        var(--wp--preset--color--cyan-bluish-gray) !important; } .has-white-background-color { background-color:
        var(--wp--preset--color--white) !important; } .has-pale-pink-background-color { background-color:
        var(--wp--preset--color--pale-pink) !important; } .has-vivid-red-background-color { background-color:
        var(--wp--preset--color--vivid-red) !important; } .has-luminous-vivid-orange-background-color { background-color:
        var(--wp--preset--color--luminous-vivid-orange) !important; } .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important; }
        .has-light-green-cyan-background-color { background-color: var(--wp--preset--color--light-green-cyan) !important; }
        .has-vivid-green-cyan-background-color { background-color: var(--wp--preset--color--vivid-green-cyan) !important; }
        .has-pale-cyan-blue-background-color { background-color: var(--wp--preset--color--pale-cyan-blue) !important; }
        .has-vivid-cyan-blue-background-color { background-color: var(--wp--preset--color--vivid-cyan-blue) !important; }
        .has-vivid-purple-background-color { background-color: var(--wp--preset--color--vivid-purple) !important; }
        .has-black-border-color { border-color: var(--wp--preset--color--black) !important; }
        .has-cyan-bluish-gray-border-color { border-color: var(--wp--preset--color--cyan-bluish-gray) !important; }
        .has-white-border-color { border-color: var(--wp--preset--color--white) !important; } .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important; } .has-vivid-red-border-color { border-color:
        var(--wp--preset--color--vivid-red) !important; } .has-luminous-vivid-orange-border-color { border-color:
        var(--wp--preset--color--luminous-vivid-orange) !important; } .has-luminous-vivid-amber-border-color { border-color:
        var(--wp--preset--color--luminous-vivid-amber) !important; } .has-light-green-cyan-border-color { border-color:
        var(--wp--preset--color--light-green-cyan) !important; } .has-vivid-green-cyan-border-color { border-color:
        var(--wp--preset--color--vivid-green-cyan) !important; } .has-pale-cyan-blue-border-color { border-color:
        var(--wp--preset--color--pale-cyan-blue) !important; } .has-vivid-cyan-blue-border-color { border-color:
        var(--wp--preset--color--vivid-cyan-blue) !important; } .has-vivid-purple-border-color { border-color:
        var(--wp--preset--color--vivid-purple) !important; } .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important; }
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background { background:
        var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important; }
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background { background:
        var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important; }
        .has-luminous-vivid-orange-to-vivid-red-gradient-background { background:
        var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important; }
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background { background:
        var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important; }
        .has-cool-to-warm-spectrum-gradient-background { background: var(--wp--preset--gradient--cool-to-warm-spectrum)
        !important; } .has-blush-light-purple-gradient-background { background:
        var(--wp--preset--gradient--blush-light-purple) !important; } .has-blush-bordeaux-gradient-background { background:
        var(--wp--preset--gradient--blush-bordeaux) !important; } .has-luminous-dusk-gradient-background { background:
        var(--wp--preset--gradient--luminous-dusk) !important; } .has-pale-ocean-gradient-background { background:
        var(--wp--preset--gradient--pale-ocean) !important; } .has-electric-grass-gradient-background { background:
        var(--wp--preset--gradient--electric-grass) !important; } .has-midnight-gradient-background { background:
        var(--wp--preset--gradient--midnight) !important; } .has-small-font-size { font-size:
        var(--wp--preset--font-size--small) !important; } .has-medium-font-size { font-size:
        var(--wp--preset--font-size--medium) !important; } .has-large-font-size { font-size:
        var(--wp--preset--font-size--large) !important; } .has-x-large-font-size { font-size:
        var(--wp--preset--font-size--x-large) !important; } </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://kinforce.net/wiras/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6' type='text/css'
        media='all' />
    <link rel='stylesheet' id='template-kit-export-css'
        href='https://kinforce.net/wiras/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21'
        type='text/css' media='all' />
    <link rel='stylesheet' id='hello-elementor-css'
        href='https://kinforce.net/wiras/wp-content/themes/hello-elementor/style.min.css?ver=2.5.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='https://kinforce.net/wiras/wp-content/themes/hello-elementor/theme.min.css?ver=2.5.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=2.5.7'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.15.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.6.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.6.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-8-css'
        href='https://kinforce.net/wiras/wp-content/uploads/elementor/css/post-8.css?ver=1616510308' type='text/css'
        media='all' />
    <link rel='stylesheet' id='typing-effect-css'
        href='https://kinforce.net/wiras/wp-content/plugins/press-elements/assets/css/typing-effect.min.css?ver=5.9.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-55-css'
        href='https://kinforce.net/wiras/wp-content/uploads/elementor/css/post-55.css?ver=1616557436' type='text/css'
        media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.5.7'
        type='text/css' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.5.7'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBarlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=5.9.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <script type='text/javascript' src='https://kinforce.net/wiras/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='https://kinforce.net/wiras/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://kinforce.net/wiras/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21'
        id='template-kit-export-js'></script>
    <link rel="https://api.w.org/" href="https://kinforce.net/wiras/wp-json/" />
    <link rel="alternate" type="application/json" href="https://kinforce.net/wiras/wp-json/wp/v2/pages/55" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://kinforce.net/wiras/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://kinforce.net/wiras/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.3" />
    <link rel="canonical" href="https://kinforce.net/wiras/faq/" />
    <link rel='shortlink' href='https://kinforce.net/wiras/?p=55' />
    <link rel="alternate" type="application/json+oembed"
        href="https://kinforce.net/wiras/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkinforce.net%2Fwiras%2Ffaq%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://kinforce.net/wiras/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkinforce.net%2Fwiras%2Ffaq%2F&#038;format=xml" />
    {{-- title section --}}
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2931bc82 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="2931bc82" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"
        style="    background-color: #FF580E;
				background-image: url(https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-virus-pandemic-backgrounds-6EKR8EQ.jpg);
				background-position: bottom left;
				background-repeat: no-repeat;
				background-size: 60% auto;
				height: 14rem;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-row">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4be09d9b"
                    data-id="4be09d9b" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                            <div class="elementor-element elementor-element-37ce0469 elementor-widget elementor-widget-heading"
                                data-id="37ce0469" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default"
                                        style="
									text-align: center;
									margin-top: 4rem;
									color: #fff;">
                                        Covid Certificate</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end title section --}}
    <!--here -->

    <body
        class="page-template page-template-elementor_canvas page page-id-55 elementor-default elementor-template-canvas elementor-kit-8 elementor-page elementor-page-55">


        <link rel='stylesheet' id='e-animations-css'
            href='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.5'
            type='text/css' media='all' />
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9'
            id='regenerator-runtime-js'></script>
        <script type='text/javascript' src='https://kinforce.net/wiras/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
            id='wp-polyfill-js'></script>
        <script type='text/javascript' id='contact-form-7-js-extra'>
            /* <![CDATA[ */
            var wpcf7 = {
                "api": {
                    "root": "https:\/\/kinforce.net\/wiras\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                }
            };
            /* ]]> */
        </script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.5.6'
            id='contact-form-7-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.5.7'
            id='elementskit-framework-js-frontend-js'></script>
        <script type='text/javascript' id='elementskit-framework-js-frontend-js-after'>
            var elementskit = {
                resturl: 'https://kinforce.net/wiras/wp-json/elementskit/v1/',
            }
        </script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.5.7'
            id='ekit-widget-scripts-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/lottie/assets/js/lottie.min.js?ver=5.6.8'
            id='lottie-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5'
            id='elementor-webpack-runtime-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5'
            id='elementor-frontend-modules-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
            id='elementor-waypoints-js'></script>
        <script type='text/javascript' src='https://kinforce.net/wiras/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1'
            id='jquery-ui-core-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6'
            id='swiper-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.6.5'
            id='share-link-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0'
            id='elementor-dialog-js'></script>

        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5'
            id='elementor-frontend-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/lottie/assets/js/lottie.init.js?ver=2.5.7'
            id='lottie-init-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=2.5.7'
            id='animate-circle-js'></script>
        <script type='text/javascript' id='elementskit-elementor-js-extra'>
            /* <![CDATA[ */
            var ekit_config = {
                "ajaxurl": "https:\/\/kinforce.net\/wiras\/wp-admin\/admin-ajax.php",
                "nonce": "cce931af36"
            };
            /* ]]> */
        </script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.5.7'
            id='elementskit-elementor-js'></script>
        <script type='text/javascript'
            src='https://kinforce.net/wiras/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.6.5'
            id='preloaded-modules-js'></script>

        <section class="certi" style="  padding:4rem;
        background: #fff;
        margin-left:24rem;">

            <div class=" pm-certificate-container"
                style=" position: relative;
                width: 800px;
                height: 600px;
                background-color: #e78823;
                padding: 30px;
                color: #333;
                font-family: 'Open Sans', sans-serif;
                box-shadow: 0 0 5px rgba(0, 0, 0, .5);">
                <div class="outer-border"
                    style="  width: 794px;
                      height: 594px;
                      position: absolute;
                      left: 50%;
                      margin-left: -397px;
                      top: 50%;
                      margin-top:-297px;
                      border: 2px solid #fff;">
                </div>
                <div class="inner-border"
                    style=" width: 730px;
                height: 530px;
                position: absolute;
                left: 50%;
                margin-left: -365px;
                top: 50%;
                margin-top: -265px;
                border: 2px solid #fff;">
                </div>

                <div class="pm-certificate-border col-xs-12"
                    style="   position: relative;
                width: 720px;
                height: 520px;
                padding: 0;
                border: 1px solid #E1E5F0;
                background-color: rgba(255, 255, 255, 1);
                background-image: none;
                left: 50%;
                margin-left: -360px;
                top: 50%;
                margin-top: -260px;">
                    <div class="row pm-certificate-header" style="margin-bottom: 10px;">
                        <div class="pm-certificate-title cursive col-xs-12 text-center"
                            style="  
                         position: relative;
                        top: 40px;
    
                        h2 {
                            font-size: 34px !important;
                        }">
                            <h2
                            style="    font-family: serif;
                            font-size: 34px;
                            font-weight: 700;
                            line-height: 1em;
                            padding-left: 9rem;">
                                
                                Jordan Vaccine Certification </h2>
                        </div>
                    </div>

                    <div class="row pm-certificate-body"
                        style="      padding: 20px;

                    .pm-name-text {
                        font-size: 20px;
                    }">

                        <div class="pm-certificate-block">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                    <div class="pm-certificate-name underline margin-0 col-xs-8 text-center"
                                        style=" border-bottom: 1px solid #777;
                                    padding: 5px;
                                    margin-bottom: 15px;
                                    margin-top: 1rem;">
                                        <span class="pm-name-text bold"
                                        style ="margin-left: 14rem">{{$user->name}}</span>
                                    </div>
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                    <div class="pm-earned col-xs-8 text-center"
                                        style="        margin: 15px 0 20px;

                                    .pm-earned-text {
                                        font-size: 20px;
                                    }
                
                                    .pm-credits-text {
                                        font-size: 15px;
                                    }">
                                        <span class="pm-earned-text  cursive"
                                            style="        margin: 15px 0 20px;    margin-left: 17rem;">
                                            </span>
                                        <span class="pm-credits-text block bold sans"
                                        style="margin-left: 14rem;
                                        color :red ;
                                        ">You don't have any Certificate</span>
                                    </div>
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                    <div class="col-xs-12"></div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                    <div class="pm-course-title col-xs-8 text-center">
                                        <span class=" "
                                            style="        margin: 15px 0 20px;
                                            margin-left: 8rem;
                                            color :red;

                                        .pm-earned-text {
                                            font-size: 20px;
                                        }
                    
                                        .pm-credits-text {
                                            font-size: 15px;
                                            
                                            

                                        }">Becouse you didn't receive any dose of the Corona Vaccine</span>
                                    </div>
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <!-- LEAVE EMPTY -->
                                    </div>
                                
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="row">
                                <div class="pm-certificate-footer">
                                    <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                    
                                        <span class="pm-empty-space block underline"></span>
                                    
                                    </div>
                                    
                                    <div class="col-xs-4 pm-certified col-xs-4 text-center">
                                        
                                     
                                        <span class="bold block">Ministry of Health </span>
                                        <span class="bold block">The Hashemite Kingdom of Jordan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    @endsection
