@extends('interface.layout.master')
@section('content')
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="alternate" type="application/rss+xml" title="Wiras &raquo; Feed" href="https://kinforce.net/wiras/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Wiras &raquo; Comments Feed"
        href="https://kinforce.net/wiras/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/kinforce.net\/wiras\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
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
        href='https://kinforce.net/wiras/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.5.6'
        type='text/css' media='all' />
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
                                    Foundations</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

				<section class="elementor-section elementor-top-section elementor-element elementor-element-4e702aa4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="4e702aa4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-16702e5a" data-id="16702e5a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2304a06 elementor-widget elementor-widget-image" data-id="2304a06" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctor-and-team-fighting-with-corona-virus-KJ3ALLL.svg" class="attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-d91ac10 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="d91ac10" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="185" height="302" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png 185w, https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics-184x300.png 184w" sizes="(max-width: 185px) 100vw, 185px" />														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-47937427" data-id="47937427" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1fc6344 elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="1fc6344" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-72e12fc2 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="72e12fc2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Stay Safe</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-70482908 elementor-invisible elementor-widget elementor-widget-heading" data-id="70482908" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">YOU SHOULD KNOW ABOUT COVID-19</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-1a6f5c05 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="1a6f5c05" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Nam fermentum porttitor sem, nec semper felis pulvinar eg. In facilisis dolor mauris, nec vestibulum felis tempor sed. Nulla elit ipsum, scelerisque bulum vel, elementum vitae dui nec risus quis urna congue vehicula.</p><p>Pellentesque dignissim finibus dui. Etiam placerat, lectus ut molestie esque, quam lorem volutpat diam, eget ptesque justo Quisque pellentesque justo id dolor semper, non elementum odio.</p>					</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-6369de12 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="6369de12" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:800}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4aea85c7" data-id="4aea85c7" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-956cd79 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="956cd79" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Headache & Sore Throat</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-13376a04 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="13376a04" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Fever</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-5d057abc elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="5d057abc" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Shaking Chills</span>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3069251f" data-id="3069251f" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2bc4b003 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2bc4b003" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Shortness of Breath</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-1d0f251b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1d0f251b" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Diarrhea</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-f6deb94 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="f6deb94" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Cough</span>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-5acadbb elementor-invisible elementor-widget elementor-widget-text-editor" data-id="5acadbb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Ut vel enim nulla. Donec ultricies blandit nisi, a viverra lectus lacinia amet. Suspendisse ac nulla vel ex luctus accumsan non efficitur dui.</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-530dab17 elementor-hidden-tablet elementor-hidden-phone" data-id="530dab17" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3a91547f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3a91547f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ba01609" data-id="ba01609" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-19b6d9fe elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="19b6d9fe" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1b6d3ff1 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="1b6d3ff1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Protection</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-71b543c4 elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="71b543c4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-437c0a8 elementor-invisible elementor-widget elementor-widget-heading" data-id="437c0a8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">PROTECT YOURSELF FROM COVID-19</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2fb8fb38 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="2fb8fb38" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-500c8755" data-id="500c8755" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1c75b971 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1c75b971" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" width="205px" height="205px" viewBox="0 0 205 205" xml:space="preserve">
<metadata>

                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                           

	</metadata>
<path fill="#FFFFFF" d="M169.541,162.799c-0.794-1.411-1.863-2.584-3.104-3.484l0.643-0.305c5.53-2.626,7.895-9.263,5.268-14.794  c-2.303-4.85-7.691-7.264-12.707-6.015c-1.281-2.626-3.496-4.609-6.252-5.591c-2.295-0.817-4.739-0.859-7.022-0.144  c-2.597-3.605-7.164-5.371-11.647-4.273l-1.748,0.433c-0.23,0.057-0.453,0.143-0.662,0.254c-8.992,4.788-18.657,7.986-28.729,9.506  l-9.292,1.401c-1.156-0.002-2.117-0.018-2.866-0.048c-12.445-6.056-26.037-7.054-40.409-2.966  c-11.768,3.348-21.056,9.342-25.546,12.616c-1.574,1.149-3.445,1.756-5.408,1.756H9.453c-3.707,0-6.723,3.016-6.723,6.723v33.127  c0,1.861,0.782,3.655,2.144,4.923c1.362,1.267,3.208,1.918,5.064,1.783l16.464-1.189c0.708-0.051,1.422-0.024,2.124,0.079  l46.468,6.893c0.045,0.007,0.091,0.012,0.137,0.017c3.477,0.347,6.961,0.519,10.442,0.519c14.863,0,29.637-3.139,43.251-9.241  l35.634-15.971c2.88-1.29,5.097-3.749,6.085-6.744c0.988-2.996,0.668-6.292-0.879-9.044L169.541,162.799z M167.143,146.688  c1.264,2.661,0.126,5.854-2.535,7.117l-12.813,6.084c-1.577,0.734-2.935,1.354-4.05,1.849c-16.561,7.35-35.451,6.255-48.737,3.917  l27.555-1.933c5.364-0.376,9.734-4.112,11.129-9.05l22.334-10.518C162.687,142.891,165.879,144.027,167.143,146.688   M151.456,138.038c1.233,0.439,2.236,1.299,2.867,2.432l-16.535,7.787c-0.401-1.618-1.122-3.132-2.133-4.469l11.718-5.543  C148.662,137.633,150.111,137.56,151.456,138.038 M134.699,134.135l1.396-0.347c1.74-0.425,3.508,0.046,4.781,1.155l-10.285,4.866  c-1.693-0.726-3.544-1.065-5.449-0.981c-0.301,0.013-0.596,0.025-0.893,0.039C127.813,137.504,131.302,135.927,134.699,134.135   M165.07,170.257c-0.488,1.483-1.543,2.652-2.969,3.292l-35.634,15.971c-15.865,7.111-33.395,9.964-50.697,8.253l-46.398-6.882  c-1.118-0.165-2.257-0.209-3.385-0.127l-16.464,1.19c-0.365,0.025-0.609-0.149-0.724-0.255c-0.115-0.106-0.306-0.34-0.306-0.704  v-33.127c0-0.529,0.431-0.96,0.96-0.96h10.605c3.192,0,6.236-0.99,8.804-2.863c9.573-6.983,34.636-21.828,60.533-8.88  c0.349,0.175,0.73,0.276,1.119,0.3c0.804,0.047,1.87,0.072,3.138,0.081c0.174,0.032,0.353,0.051,0.535,0.051  c0.143,0,0.288-0.011,0.433-0.033l0.105-0.016c7.35-0.008,20.187-0.5,30.671-0.963c1.83-0.08,3.566,0.565,4.896,1.821  c1.331,1.256,2.078,2.955,2.104,4.786c0.049,3.554-2.691,6.533-6.236,6.781l-45.448,3.188c-1.353,0.095-2.457,1.12-2.65,2.464  c-0.193,1.342,0.576,2.638,1.847,3.11c0.395,0.146,9.807,3.61,23.147,5.413c12.391,1.675,30.607,2.142,47.025-5.144  c0.813-0.36,1.754-0.788,2.804-1.271c0.08-0.029,0.16-0.06,0.239-0.098l1.102-0.522c1.073-0.5,2.242-1.049,3.51-1.65  c2.465-1.168,5.443-0.219,6.784,2.165l0.122,0.217C165.408,167.206,165.561,168.773,165.07,170.257"></path>
<path fill="#FFFFFF" d="M139.117,85.926l0.076,14.306c0.004,0.765,0.312,1.496,0.855,2.033c0.543,0.537,1.271,0.839,2.041,0.833  l7.539-0.041l0.04,7.539c0.009,1.586,1.297,2.865,2.881,2.865h0.016l14.306-0.076c0.765-0.005,1.496-0.312,2.033-0.855  c0.537-0.543,0.837-1.277,0.833-2.041l-0.04-7.539l7.537-0.04c0.765-0.004,1.496-0.312,2.033-0.855  c0.537-0.543,0.838-1.277,0.834-2.042l-0.078-14.306c-0.008-1.591-1.313-2.864-2.896-2.865l-7.538,0.041l-0.04-7.539  c-0.005-0.764-0.313-1.495-0.855-2.033c-0.539-0.533-1.268-0.833-2.026-0.833h-0.015l-14.307,0.077  c-1.591,0.009-2.873,1.306-2.865,2.896l0.041,7.539l-7.539,0.04C140.391,83.038,139.108,84.335,139.117,85.926 M152.433,88.735  c1.592-0.009,2.874-1.305,2.866-2.896l-0.041-7.538l8.543-0.046l0.041,7.538c0.004,0.765,0.313,1.496,0.855,2.033  c0.539,0.534,1.268,0.833,2.025,0.833h0.016l7.539-0.04l0.046,8.543l-7.538,0.04c-1.592,0.009-2.875,1.306-2.866,2.897l0.04,7.538  l-8.543,0.046l-0.041-7.539c-0.008-1.586-1.297-2.865-2.881-2.865h-0.016l-7.538,0.04l-0.046-8.543L152.433,88.735z"></path>
<path fill="#FFFFFF" d="M99.353,56.533c-1.081,0-4.369,0-9.213,9.388c-2.075,4.021-4.292,9.692-4.292,13.55  c0,7.447,6.059,13.506,13.505,13.506s13.504-6.059,13.504-13.506c0-3.942-2.221-9.75-4.123-13.524  C105.587,59.7,102.431,56.533,99.353,56.533 M99.353,87.214c-4.27,0-7.743-3.474-7.743-7.743c0-2.078,1.293-6.115,3.218-10.046  c1.995-4.076,3.745-6.228,4.592-6.95c0.844,0.667,2.592,2.752,4.547,6.835c1.842,3.847,3.129,8.025,3.129,10.161  C107.096,83.74,103.623,87.214,99.353,87.214"></path>
<path fill="#FFFFFF" d="M187.195,40.306h-6.74V27.311c0-1.591-1.29-2.881-2.881-2.881H162.49V6.936h21.216  c1.591,0,2.882-1.29,2.882-2.882c0-1.591-1.291-2.881-2.882-2.881h-58.81c-5.023,0-9.84,2.134-13.215,5.854l-10.037,11.061  c-1.069,1.179-0.98,3.001,0.197,4.07c0.552,0.5,1.244,0.747,1.936,0.747c0.784,0,1.566-0.318,2.135-0.945l10.037-11.061  c2.285-2.519,5.546-3.963,8.947-3.963h31.831V24.43h-15.084c-1.591,0-2.881,1.29-2.881,2.881v12.995h-6.336  c-2.181,0-4.299,0.427-6.294,1.269c-5.996,2.53-9.885,8.37-9.906,14.886l-0.068,78.903c-0.002,1.592,1.287,2.883,2.879,2.884h0.002  c1.59,0,2.88-1.288,2.881-2.878l0.068-78.897c0.014-4.194,2.52-7.958,6.385-9.588c1.282-0.542,2.646-0.815,4.054-0.815h54.769  c5.756,0,10.438,4.682,10.438,10.438v140.709c0,0.529-0.431,0.96-0.96,0.96h-74.13c-0.529,0-0.96-0.431-0.96-0.96  c0-1.591-1.29-2.882-2.881-2.882c-1.592,0-2.882,1.291-2.882,2.882c0,3.707,3.016,6.723,6.723,6.723h74.13  c3.707,0,6.723-3.016,6.723-6.723V56.506C203.396,47.573,196.129,40.306,187.195,40.306 M144.525,30.191h30.168v10.114h-30.168  V30.191z"></path>
</svg>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Clean Your Hands for 20 secs                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4fff23e" data-id="4fff23e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c1d85ea ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="c1d85ea" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="patient">
	<path fill="#FFFFFF" d="M146.559,136.518h-14.414c0.577-0.369,1.138-0.753,1.602-1.138l0,0l0.545-0.4
		c12.305-8.983,20.928-22.13,24.264-36.996c0,0,0.32-1.746,0.385-1.89c15.94-31.18,3.587-69.378-27.592-85.319
		c-31.18-15.94-69.378-3.587-85.319,27.592c-7.38,14.436-8.951,31.15-4.388,46.708c0,0.16,0.08,0.336,0.128,0.496l0,0
		c1.101,3.636,2.543,7.159,4.309,10.522c0,0.128,0.4,1.922,0.464,2.162l0,0c3.387,14.488,11.753,27.326,23.639,36.275
		c0.512,0.406,1.046,0.79,1.602,1.153c0.555,0.362,1.003,0.667,1.345,0.913H58.441c-25.905,0.025-46.899,21.02-46.926,46.926v7.527
		c0.009,5.654,4.595,10.233,10.25,10.233h161.469c5.655,0,10.242-4.579,10.25-10.233v-7.527
		C193.502,157.586,172.496,136.544,146.559,136.518z M132.465,128.413l-6.406-5.798c7.232-5.422,12.784-12.779,16.016-21.22
		c0.123-0.302,0.225-0.613,0.305-0.929h8.937C148.029,111.486,141.451,121.237,132.465,128.413z M102.5,139.24
		c-8.665-0.065-17.142-2.533-24.488-7.127l6.598-5.958c11.161,6.043,24.618,6.043,35.779,0l6.679,6.021
		C119.684,136.743,111.183,139.188,102.5,139.24z M119.012,142.924c-1.766,9.154-10.617,15.144-19.771,13.378
		c-6.81-1.313-12.123-6.657-13.397-13.475C96.581,146.553,108.254,146.586,119.012,142.924z M68.867,99.073
		c-0.461-1.17-0.305-2.493,0.417-3.523c0.733-1.036,1.935-1.637,3.203-1.602h59.978c1.269-0.035,2.471,0.566,3.203,1.602
		c0.722,1.03,0.878,2.354,0.417,3.523c-3.155,8.333-8.934,15.416-16.464,20.179l0,0l-0.705,0.433
		c-10.029,6.065-22.595,6.065-32.624,0l-0.801-0.48l0,0C77.911,114.477,72.076,107.41,68.867,99.073z M45.5,67.266
		c-0.071-31.48,25.391-57.057,56.871-57.128c31.48-0.071,57.057,25.391,57.129,56.871c0.01,4.763-0.576,9.509-1.746,14.126
		c-2.715-2.283-5.549-4.421-8.488-6.406c-7.8-5.269-21.316-18.082-28.668-25.257c-3.623-3.536-9.367-3.655-13.133-0.272
		c-4.988,4.339-10.264,8.336-15.792,11.963C81.039,68.339,58.89,76.427,47.07,80.462C46.029,76.141,45.502,71.711,45.5,67.266z
		 M52.195,94.14c-0.485-2.761-0.753-5.557-0.801-8.36c13.726-4.805,33.441-12.252,43.851-19.219
		c5.761-3.799,11.267-7.972,16.479-12.492c1.236-1.169,3.17-1.169,4.404,0c7.512,7.271,21.333,20.372,29.613,25.913
		c2.725,1.862,5.344,3.873,7.848,6.022c-0.049,2.686-0.313,5.363-0.785,8.008l0,0h-10.778c-0.283-0.733-0.648-1.431-1.089-2.082
		c-1.912-2.798-5.083-4.471-8.473-4.468h-59.93c-3.389-0.003-6.561,1.67-8.472,4.468c-0.455,0.665-0.831,1.379-1.121,2.13
		L52.195,94.14z M72.631,128.413c-8.964-7.172-15.552-16.886-18.898-27.867h8.921c0.08,0.316,0.181,0.627,0.304,0.929
		c3.229,8.443,8.782,15.8,16.016,21.22L72.631,128.413z M187.078,191.051c0,2.113-1.713,3.827-3.827,3.827c-0.005,0-0.011,0-0.017,0
		H21.765c-2.114,0.009-3.835-1.697-3.844-3.812c0-0.006,0-0.011,0-0.016v-7.527c0.026-22.367,18.152-40.494,40.52-40.52h20.933
		c1.78,12.736,13.549,21.619,26.287,19.838c10.301-1.439,18.398-9.537,19.838-19.838h21.061c22.367,0.025,40.494,18.152,40.52,40.52
		V191.051z"/>
	<path fill="#FFFFFF" d="M18.915,82.384c1.251,1.25,1.252,3.278,0.002,4.53c-0.001,0.001-0.001,0.002-0.002,0.003
		c-1.25,1.242-3.267,1.242-4.517,0l-2.61-2.611l-2.611,2.611c-1.25,1.251-3.278,1.252-4.53,0.002
		c-0.001-0.001-0.001-0.002-0.002-0.002c-1.251-1.25-1.253-3.278-0.002-4.53c0.001,0,0.001-0.001,0.002-0.002l2.61-2.61l-2.61-2.611
		c-1.309-1.19-1.405-3.216-0.215-4.524c1.19-1.309,3.216-1.405,4.525-0.215c0.078,0.07,0.152,0.145,0.222,0.223l2.611,2.626
		l2.626-2.626c1.151-1.344,3.173-1.5,4.517-0.35c1.343,1.151,1.5,3.173,0.349,4.517c-0.107,0.125-0.224,0.242-0.349,0.349
		l-2.611,2.611L18.915,82.384z"/>
	<path fill="#FFFFFF" d="M39.831,123.32c1.251,1.25,1.252,3.278,0.002,4.529c-0.001,0.002-0.002,0.002-0.002,0.003
		c-1.25,1.252-3.278,1.253-4.53,0.003c0-0.001-0.001-0.002-0.002-0.003l-2.594-2.61l-2.611,2.61c-0.604,0.6-1.423,0.935-2.274,0.929
		c-0.817-0.003-1.602-0.318-2.194-0.881c-1.265-1.236-1.288-3.264-0.051-4.529c0.017-0.018,0.034-0.034,0.051-0.051l2.61-2.61
		l-2.61-2.563c-1.251-1.252-1.251-3.281,0-4.532c1.251-1.252,3.281-1.252,4.532,0l2.611,2.61l2.466-2.61
		c1.251-1.252,3.281-1.252,4.532,0c1.252,1.251,1.252,3.28,0,4.532l-2.546,2.61L39.831,123.32z"/>
	<path fill="#FFFFFF" d="M185.781,107.209c1.252,1.251,1.252,3.28,0,4.532c-1.252,1.251-3.281,1.251-4.532,0l-2.595-2.595
		l-2.482,2.595c-1.252,1.251-3.281,1.251-4.532,0c-1.252-1.252-1.252-3.281,0-4.532l2.61-2.595l-2.61-2.611
		c-1.252-1.251-1.252-3.281,0-4.532c1.251-1.251,3.28-1.251,4.532,0l2.61,2.61l2.595-2.61c1.05-1.424,3.055-1.727,4.479-0.677
		s1.728,3.055,0.678,4.479c-0.209,0.283-0.463,0.53-0.752,0.73l-2.595,2.611L185.781,107.209z"/>
</g>
</svg>

                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Avoid Direct Contact                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7f53e0d8" data-id="7f53e0d8" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6593b2e5 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6593b2e5" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="shield">
	<path fill="#FFFFFF" d="M148.289,38.181L82.625,4.548c-2.605-1.329-5.69-1.329-8.296,0L8.648,38.261
		c-2.804,1.626-4.531,4.622-4.532,7.864v46.638c0.052,21.071,11.291,40.53,29.517,51.105l40.359,23.303
		c2.815,1.622,6.281,1.622,9.097,0l40.376-23.303c18.219-10.579,29.451-30.037,29.5-51.105V46.125
		C152.949,42.829,151.163,39.795,148.289,38.181z M146.559,92.763c-0.033,18.781-10.049,36.129-26.297,45.548L79.886,161.63
		c-0.833,0.48-1.858,0.48-2.69,0l-40.359-23.319c-16.255-9.415-26.277-26.764-26.313-45.548V46.125
		c-0.006-0.903,0.446-1.747,1.201-2.242L77.388,10.25c0.338-0.172,0.709-0.271,1.089-0.288c0.428,0,0.85,0.099,1.233,0.288
		l65.439,33.633c0.83,0.479,1.343,1.364,1.346,2.322L146.559,92.763z"/>
	<path fill="#FFFFFF" d="M120.229,127.532c-1.769-0.007-3.198-1.446-3.19-3.216c0.004-0.94,0.421-1.832,1.141-2.438
		c6.725-5.629,11.31-13.398,12.988-22.005c0.233-1.753,1.844-2.986,3.598-2.753c1.754,0.233,2.986,1.844,2.752,3.598
		c-0.016,0.125-0.04,0.25-0.071,0.372c-1.946,10.059-7.304,19.138-15.167,25.705C121.703,127.273,120.978,127.533,120.229,127.532z"
		/>
	<path fill="#FFFFFF" d="M22.038,78.269c-1.769,0-3.203-1.434-3.203-3.203V49.648l22.63-11.611c1.575-0.81,3.507-0.189,4.316,1.385
		c0.809,1.575,0.189,3.507-1.385,4.316l0,0l-19.219,9.817v21.509C25.177,76.81,23.781,78.233,22.038,78.269z"/>
	<path fill="#FFFFFF" d="M78.477,52.275c-18.575,0-33.633,15.058-33.633,33.633s15.058,33.633,33.633,33.633
		s33.633-15.059,33.633-33.633C112.048,67.358,97.026,52.336,78.477,52.275z M78.477,113.246c-15.037,0-27.227-12.189-27.227-27.226
		c0-15.037,12.19-27.227,27.227-27.227s27.227,12.189,27.227,27.227C105.65,101.035,93.492,113.193,78.477,113.246z"/>
	<path fill="#FFFFFF" d="M94.796,85.972c0,1.769-1.434,3.203-3.203,3.203H81.68v9.85c0,1.769-1.434,3.203-3.203,3.203
		s-3.203-1.434-3.203-3.203v-9.85h-9.786c-1.769,0-3.203-1.434-3.203-3.203s1.434-3.203,3.203-3.203h9.786v-9.85
		c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203v9.85h9.85c1.769-0.035,3.231,1.37,3.267,3.139
		C94.796,85.929,94.796,85.95,94.796,85.972z"/>
	<path fill="#FFFFFF" d="M198.594,161.229c-1.651-0.009-3.038,1.239-3.203,2.883h-5.333c-0.537-3.896-2.071-7.586-4.452-10.715
		l3.795-3.796c0.563,0.48,1.279,0.742,2.019,0.737c1.769-0.008,3.196-1.448,3.189-3.217c-0.003-0.841-0.338-1.647-0.932-2.245
		l-2.034-2.033l-2.033-2.034c-1.25-1.252-3.279-1.253-4.53-0.003c-0.001,0.001-0.001,0.002-0.003,0.003
		c-1.151,1.163-1.241,3.007-0.208,4.276l-3.779,3.859c-3.136-2.367-6.823-3.895-10.715-4.437v-5.413
		c1.769-0.088,3.132-1.594,3.043-3.363s-1.595-3.131-3.363-3.043h-5.749c-1.77-0.093-3.279,1.266-3.371,3.035
		c-0.094,1.77,1.266,3.278,3.034,3.371v5.333c-3.896,0.556-7.583,2.112-10.698,4.517l-3.796-3.796
		c1.033-1.269,0.944-3.113-0.208-4.276c-1.25-1.251-3.278-1.252-4.529-0.002c-0.002,0-0.002,0.002-0.003,0.002l-4.068,4.068
		c-1.241,1.25-1.241,3.268,0,4.517c0.603,0.605,1.421,0.945,2.274,0.944c0.734,0.002,1.443-0.26,2.002-0.736l3.796,3.796
		c-2.371,3.133-3.898,6.822-4.437,10.714h-5.35c-0.088-1.769-1.594-3.131-3.363-3.043c-1.769,0.089-3.131,1.595-3.043,3.363v5.75
		c-0.092,1.77,1.266,3.278,3.035,3.371c1.77,0.094,3.279-1.266,3.371-3.035h5.35c0.549,3.885,2.075,7.566,4.437,10.699l-3.796,3.795
		c-1.326-1.181-3.359-1.063-4.541,0.265c-1.18,1.327-1.063,3.359,0.265,4.54l0,0l1.938,1.922l0.208,0.225l1.922,1.906
		c1.177,1.326,3.206,1.448,4.532,0.271c1.326-1.176,1.449-3.205,0.272-4.532l3.731-3.892c3.123,2.382,6.809,3.916,10.698,4.452
		v5.333c-1.769,0.094-3.128,1.603-3.034,3.371c0.092,1.77,1.602,3.129,3.371,3.035h5.749c1.769,0.089,3.274-1.273,3.363-3.043
		c0.089-1.769-1.274-3.274-3.043-3.363v-5.333c3.888-0.537,7.571-2.064,10.698-4.437l3.796,3.796
		c-1.177,1.327-1.054,3.356,0.272,4.532c1.326,1.177,3.355,1.055,4.532-0.271l1.858-1.858l0.271-0.272l1.938-1.922
		c1.327-1.181,1.444-3.213,0.265-4.54c-1.182-1.327-3.215-1.445-4.541-0.265l-3.796-3.795c2.373-3.128,3.905-6.811,4.452-10.699
		h5.27c0.093,1.77,1.602,3.129,3.371,3.035c1.77-0.093,3.128-1.602,3.035-3.371v-5.75
		C201.788,162.654,200.356,161.229,198.594,161.229z M178.99,179.103c-6.75,6.276-17.309,5.892-23.585-0.858
		c-5.935-6.383-5.958-16.258-0.054-22.668l0.145-0.145c6.613-6.42,17.179-6.262,23.598,0.352c6.313,6.504,6.28,16.855-0.071,23.319
		H178.99z"/>
	<path fill="#FFFFFF" d="M172.28,80.431L172.28,80.431c-0.04,0.047-0.089,0.085-0.145,0.112L172.28,80.431z"/>
	<path fill="#FFFFFF" d="M197.505,81.792c-1.202,0-2.304,0.675-2.851,1.746h-1.25c-0.395-1.801-1.109-3.515-2.113-5.061l0.912-0.913
		c0.307,0.122,0.633,0.182,0.961,0.176c1.77-0.007,3.197-1.447,3.19-3.216c-0.003-0.857-0.351-1.678-0.964-2.277l-2.467-2.451
		c-1.25-1.251-3.277-1.252-4.529-0.002c-0.001,0.001-0.002,0.002-0.003,0.002c-0.827,0.844-1.123,2.076-0.769,3.203l-0.896,0.897
		c-1.557-1.005-3.282-1.722-5.094-2.114v-1.25c1.574-0.807,2.197-2.737,1.391-4.311c-0.547-1.069-1.646-1.742-2.848-1.743h-3.491
		c-1.769,0.001-3.202,1.437-3.2,3.206c0.001,1.201,0.674,2.3,1.742,2.848v1.25c-1.806,0.392-3.525,1.108-5.076,2.114l-0.913-0.913
		c0.382-1.127,0.082-2.373-0.769-3.203c-1.25-1.242-3.268-1.242-4.517,0l-2.467,2.466c-1.247,1.254-1.241,3.283,0.014,4.53
		c0.597,0.593,1.403,0.928,2.245,0.932c0.334,0.004,0.665-0.056,0.977-0.176l0.913,0.913c-1.017,1.547-1.739,3.268-2.13,5.077h-1.25
		c-0.807-1.574-2.736-2.197-4.311-1.39c-1.069,0.547-1.742,1.647-1.743,2.848v3.491c0.002,1.769,1.438,3.202,3.206,3.2
		c1.201-0.001,2.301-0.674,2.848-1.743h1.25c0.391,1.809,1.113,3.53,2.13,5.077l-0.913,0.913c-1.128-0.354-2.359-0.059-3.203,0.769
		c-1.252,1.25-1.253,3.278-0.002,4.53c0,0.001,0.001,0.001,0.002,0.002l2.467,2.45c1.249,1.242,3.267,1.242,4.516,0
		c0.834-0.84,1.136-2.072,0.785-3.203l0.913-0.913c1.545,1.005,3.26,1.721,5.061,2.114v1.25c-1.574,0.806-2.196,2.737-1.39,4.311
		c0.547,1.069,1.646,1.741,2.848,1.743h3.491c1.769-0.002,3.202-1.438,3.2-3.207c-0.002-1.2-0.674-2.3-1.743-2.847v-1.25
		c1.808-0.389,3.528-1.105,5.077-2.114l0.913,0.913c-0.354,1.128-0.06,2.359,0.769,3.203c1.25,1.252,3.278,1.253,4.529,0.003
		c0.002-0.001,0.002-0.002,0.003-0.003l2.435-2.434c1.252-1.25,1.253-3.278,0.002-4.53c0-0.001-0.001-0.002-0.002-0.003
		c-0.844-0.828-2.075-1.123-3.203-0.769l-0.913-0.913c1.005-1.551,1.722-3.271,2.114-5.077h1.249
		c0.807,1.574,2.737,2.197,4.312,1.39c1.068-0.547,1.741-1.647,1.742-2.848v-3.491C200.691,83.232,199.268,81.801,197.505,81.792z
		 M184.692,93.003c-3.451,3.416-9.009,3.416-12.46,0c-0.033-0.042-0.071-0.079-0.112-0.112c-3.348-3.397-3.404-8.834-0.128-12.3l0,0
		l0,0l0.191-0.176l0,0l0,0c1.641-1.588,3.836-2.473,6.118-2.466c4.892,0,8.856,3.966,8.856,8.857
		c-0.001,2.348-0.934,4.601-2.594,6.261L184.692,93.003z"/>
</g>
</svg>

                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Stay at Your Home                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-29a5b221 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="29a5b221" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:900}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-62b0adad" data-id="62b0adad" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1b34cf22 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1b34cf22" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="medical_mask">
	<path fill="#FFFFFF" d="M189.737,67.778c13.267-15.737,11.263-39.249-4.474-52.516c-13.877-11.699-34.164-11.699-48.042,0
		l-1.857-1.857c-3.646-3.646-9.519-3.767-13.31-0.272c-4.372,2.787-50.192,32.031-63.534,45.388
		c-13.341,13.357-42.602,59.162-45.388,63.534c-3.494,3.791-3.374,9.664,0.272,13.31l1.857,1.857
		C2.052,153.006,4.137,176.51,19.92,189.721c13.843,11.587,33.999,11.587,47.842,0l1.874,1.874
		c3.645,3.646,9.518,3.767,13.309,0.272c4.373-2.787,50.177-32.031,63.518-45.389c13.341-13.356,42.617-59.161,45.404-63.534
		c3.494-3.791,3.374-9.664-0.272-13.309L189.737,67.778z M183.043,21.958c11.166,11.184,12.092,28.991,2.146,41.272l-43.418-43.418
		C154.057,9.88,171.853,10.806,183.043,21.958z M21.958,183.043c-11.152-11.19-12.078-28.986-2.146-41.272l43.418,43.418
		C50.943,195.12,33.147,194.194,21.958,183.043z M187.063,78.701l-0.433,0.544c-0.32,0.497-31.486,49.488-44.699,62.701
		S79.742,186.31,79.245,186.63l-0.544,0.433c-1.25,1.252-3.278,1.253-4.53,0.002c-0.001,0-0.001-0.001-0.002-0.002l-4.036-4.02
		l-48.175-48.176l-4.02-4.035c-1.251-1.25-1.253-3.279-0.002-4.53c0.001-0.001,0.001-0.002,0.002-0.003l0.433-0.544
		c0.32-0.497,31.471-49.488,44.684-62.701s62.204-44.363,62.701-44.684l0.544-0.433c1.25-1.251,3.279-1.253,4.53-0.002
		c0.001,0.001,0.001,0.001,0.003,0.002l56.23,56.231c1.252,1.25,1.253,3.278,0.002,4.53C187.064,78.699,187.063,78.7,187.063,78.701
		z"/>
	<path fill="#FFFFFF" d="M44.684,131.776c-1.769,0.011-3.211-1.415-3.222-3.185c-0.005-0.86,0.336-1.687,0.947-2.293l83.858-83.874
		c1.309-1.19,3.334-1.094,4.524,0.215c1.108,1.219,1.111,3.079,0.008,4.302l-83.858,83.89
		C46.344,131.434,45.532,131.773,44.684,131.776z"/>
	<path fill="#FFFFFF" d="M60.539,147.632c-1.769,0.001-3.204-1.431-3.206-3.2c-0.001-0.848,0.334-1.66,0.931-2.261l83.858-83.89
		c1.251-1.251,3.28-1.251,4.532,0c1.251,1.251,1.251,3.281,0,4.533l-83.858,83.874C62.199,147.289,61.387,147.629,60.539,147.632z"
		/>
	<path fill="#FFFFFF" d="M76.427,163.52c-0.846,0-1.658-0.333-2.258-0.929c-1.251-1.251-1.253-3.278-0.002-4.53
		c0,0,0.001-0.002,0.002-0.002l62.637-62.653c1.251-1.252,3.28-1.252,4.532,0c1.252,1.251,1.252,3.281,0,4.532l-62.637,62.653
		C78.096,163.19,77.278,163.524,76.427,163.52z"/>
	<path fill="#FFFFFF" d="M148.337,91.625c-1.769,0.001-3.204-1.432-3.206-3.201c0-0.847,0.334-1.66,0.932-2.261l11.996-12.028
		c1.186-1.313,3.211-1.416,4.523-0.23s1.416,3.211,0.23,4.524c-0.07,0.078-0.145,0.152-0.222,0.223l-12.044,12.028
		C149.961,91.271,149.168,91.609,148.337,91.625z"/>
</g>
</svg>

                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Wear Face Mask                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3d7acffc" data-id="3d7acffc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-3579fc87 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="3579fc87" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="lungs">
	<path fill="#FFFFFF" d="M132.369,49.809h-10.65c-4.994,0.009-9.04,4.055-9.049,9.049v4.612h-1.602V24.023
		c0.074-4.655-3.385-8.611-8.008-9.161c-4.854-0.433-9.141,3.15-9.574,8.005c-0.022,0.251-0.034,0.503-0.035,0.756V63.47H92.25
		v-4.612c-0.008-4.963-4.006-8.996-8.969-9.049h-10.65c-38.247,0-69.251,31.005-69.251,69.252v43.818
		c-0.001,14.895,11.965,27.025,26.858,27.227c34.08,0.203,61.872-27.259,62.076-61.338c0-0.07,0.001-0.141,0.001-0.21V80.959h20.372
		v47.599c0.044,34.08,27.707,61.673,61.787,61.629c0.097,0,0.193-0.001,0.29-0.001c14.893-0.201,26.859-12.332,26.858-27.227
		v-43.898C201.621,80.813,170.615,49.809,132.369,49.809z M85.924,128.558c-0.035,30.533-24.816,55.257-55.35,55.222
		c-0.048,0-0.096,0-0.145,0c-11.455-0.062-20.708-9.365-20.708-20.82v-43.898c0-34.709,28.137-62.846,62.845-62.846
		c0.021,0,0.042,0,0.064,0h10.65c1.459,0,2.643,1.183,2.643,2.643l0,0v4.805c-11.211,1.874-21.253,8.232-29.517,17.841
		c-3.045-0.247-6.109,0.106-9.017,1.041c-5.708,1.852-10.457,5.88-13.213,11.211c-0.71,1.281-0.509,2.875,0.497,3.94
		c1.268,1.234,3.295,1.208,4.529-0.06c0.227-0.233,0.417-0.499,0.563-0.789c1.975-3.908,5.438-6.857,9.609-8.184
		c0.638-0.237,1.291-0.43,1.954-0.577c-6.109,9.205-10.595,19.389-13.261,30.109c-3.111,0.835-5.939,2.495-8.184,4.805
		c-2.299,2.279-3.957,5.124-4.805,8.248c-0.459,1.707,0.552,3.463,2.258,3.924c0.273,0.063,0.552,0.095,0.833,0.096
		c1.457,0.025,2.746-0.936,3.139-2.338c0.55-2.029,1.621-3.879,3.107-5.365c0.584-0.605,1.234-1.143,1.938-1.602
		c-1.096,5.784-1.776,11.64-2.034,17.521c-0.105,2.376,0.769,4.691,2.418,6.406c1.678,1.738,3.99,2.722,6.406,2.723
		c4.71,0.004,8.587-3.703,8.792-8.408c0.232-4.653,0.767-9.287,1.602-13.87c1.425,2.728,1.751,5.896,0.913,8.856
		c-0.461,1.616,0.474,3.301,2.09,3.762c0.066,0.02,0.133,0.036,0.2,0.051c0.273,0.067,0.552,0.105,0.833,0.111
		c1.452-0.002,2.721-0.982,3.091-2.386c0.422-1.567,0.632-3.183,0.625-4.805c-0.004-5.19-2.196-10.14-6.038-13.63
		c2.399-9.897,6.755-19.215,12.813-27.402c3.415,4.946,3.869,11.358,1.185,16.736c-0.885,1.576-0.343,3.572,1.217,4.484
		c1.572,0.812,3.504,0.195,4.315-1.377c0.003-0.006,0.006-0.011,0.009-0.017c4.061-8.003,3.085-17.638-2.499-24.664
		c3.765-3.888,8.446-6.769,13.613-8.376L85.924,128.558z M88.839,74.553h-0.225c-22.87,3.203-41.384,32.992-43.082,69.396
		c-0.06,1.276-1.108,2.283-2.386,2.29c-0.664,0.007-1.3-0.26-1.762-0.736c-0.447-0.469-0.684-1.099-0.657-1.746
		c1.778-38.581,21.974-70.308,47.022-73.928h11.387c0.442,0,0.801-0.358,0.801-0.801V23.623c0-1.327,1.076-2.402,2.402-2.402
		c1.326,0,2.402,1.076,2.402,2.402v45.468c0,0.442,0.358,0.801,0.801,0.801h11.739c25.049,3.62,45.244,35.346,47.022,73.928
		c0.027,0.646-0.211,1.277-0.657,1.746c-0.461,0.477-1.099,0.742-1.762,0.736c-1.278-0.008-2.327-1.014-2.386-2.29
		c-1.602-36.403-20.212-66.241-43.082-69.396L88.839,74.553z M195.23,162.879c0,11.455-9.254,20.759-20.708,20.82
		c-30.534,0.07-55.343-24.624-55.414-55.158c0-0.021,0-0.043,0-0.063V81.68c5.313,1.685,10.111,4.688,13.949,8.729
		c-5.363,6.999-6.229,16.455-2.226,24.312c0.543,1.077,1.645,1.759,2.851,1.762c0.706,0.003,1.393-0.229,1.954-0.656
		c1.219-1.008,1.566-2.731,0.832-4.132c-1.928-3.849-2.268-8.301-0.944-12.396c0.438-1.351,1.052-2.637,1.825-3.828
		c5.879,8.107,10.117,17.286,12.477,27.018c-3.797,3.482-5.958,8.397-5.958,13.55c-0.007,1.622,0.203,3.238,0.625,4.805
		c0.37,1.404,1.639,2.383,3.091,2.386c0.281-0.007,0.561-0.044,0.833-0.112c1.706-0.461,2.717-2.217,2.258-3.924
		c-0.261-1.01-0.396-2.048-0.4-3.091c0.002-1.886,0.446-3.745,1.298-5.429c0.793,4.533,1.297,9.111,1.505,13.709
		c0.206,4.705,4.083,8.412,8.793,8.408c2.416-0.001,4.729-0.983,6.406-2.723c1.649-1.714,2.524-4.029,2.418-6.406
		c-0.271-5.913-0.956-11.8-2.05-17.617c2.515,1.576,4.354,4.03,5.157,6.887c0.376,1.398,1.644,2.369,3.091,2.37
		c0.28-0.001,0.56-0.033,0.833-0.096c1.706-0.461,2.717-2.217,2.258-3.924c-1.678-6.383-6.678-11.358-13.068-13.005
		c-2.671-10.756-7.179-20.969-13.325-30.189c5.303,0.748,9.903,4.044,12.316,8.825c0.547,1.071,1.648,1.745,2.851,1.746
		c0.681,0.005,1.345-0.215,1.89-0.625c1.279-1.027,1.631-2.827,0.833-4.26c-4.382-8.34-13.429-13.14-22.79-12.092
		c-8.28-9.609-18.435-16.016-29.598-17.938v-4.805c-0.044-1.459,1.104-2.677,2.562-2.722c0.022,0,0.044-0.001,0.065-0.001h10.635
		c34.708,0,62.845,28.137,62.845,62.846l0,0L195.23,162.879z"/>
</g>
</svg>

                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Do Yoga and Meditation                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1889eb10" data-id="1889eb10" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-571b9d2 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="571b9d2" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="handsanitizer">
	<path fill="#FFFFFF" d="M35.234,113.038c-1.769,0-3.203-1.435-3.203-3.203v-16.56c0-5.307,4.302-9.609,9.609-9.609h16.544
		c1.769,0,3.203,1.434,3.203,3.203s-1.434,3.203-3.203,3.203H41.641c-1.769,0-3.203,1.434-3.203,3.203v16.56
		C38.438,111.604,37.003,113.038,35.234,113.038z"/>
	<path fill="#FFFFFF" d="M75.273,114.768c-15.47-0.044-28.047,12.461-28.091,27.932s12.461,28.047,27.931,28.092
		c15.47,0.043,28.047-12.461,28.092-27.932c0-0.032,0-0.064,0-0.096C103.188,127.334,90.703,114.82,75.273,114.768z M75.273,164.416
		c-11.932,0.045-21.641-9.592-21.685-21.524c-0.044-11.933,9.593-21.641,21.525-21.685c11.932-0.045,21.641,9.592,21.685,21.524
		c0,0.011,0,0.021,0,0.032c-0.009,11.896-9.628,21.552-21.525,21.604V164.416z"/>
	<path fill="#FFFFFF" d="M131.856,7.287h-23.575c-1.803-2.565-4.744-4.09-7.879-4.084H50.017c-5.307,0-9.609,4.302-9.609,9.609
		v10.282c0,5.307,4.302,9.609,9.609,9.609h2.835v20.147h-2.883c-5.307,0-9.609,4.302-9.609,9.609v2.05
		c-0.003,1.093,0.187,2.177,0.561,3.203H25.625c-5.307,0-9.609,4.302-9.609,9.609v115.009c0,5.307,4.302,9.609,9.609,9.609h99.185
		c5.308,0,9.609-4.303,9.609-9.609V77.259c0-5.307-4.302-9.609-9.609-9.609h-15.358c0.373-1.026,0.563-2.111,0.561-3.203v-1.986
		c0-5.307-4.303-9.609-9.61-9.609h-0.176V32.656h0.176c3.135-0.007,6.071-1.543,7.864-4.116h20.388v9.721
		c0,5.307,4.302,9.609,9.609,9.609h2.034c5.307,0,9.609-4.302,9.609-9.609V25.337C149.897,15.372,141.821,7.296,131.856,7.287z
		 M124.81,74.056c1.769,0,3.203,1.434,3.203,3.203v115.008c0,1.77-1.435,3.203-3.203,3.203H25.625c-1.769,0-3.203-1.434-3.203-3.203
		V77.259c0-1.769,1.434-3.203,3.203-3.203H124.81z M100.402,59.258c1.769,0,3.204,1.434,3.204,3.203l0,0v2.05
		c0,1.769-1.435,3.203-3.204,3.203H50.017c-1.769,0-3.203-1.434-3.203-3.203v-2.05c0-1.769,1.434-3.203,3.203-3.203H100.402z
		 M59.258,52.852V32.656h34.562v20.196H59.258z M103.605,23.046c0,1.769-1.435,3.203-3.204,3.203H50.017
		c-1.769,0-3.203-1.434-3.203-3.203V12.813c0-1.769,1.434-3.203,3.203-3.203h50.385c1.769,0,3.204,1.434,3.204,3.203l0,0V23.046z
		 M143.5,38.261c0,1.769-1.434,3.203-3.203,3.203h-2.034c-1.769,0-3.203-1.434-3.203-3.203V28.54c0-3.538-2.868-6.406-6.406-6.406
		h-18.642v-8.44h21.845c6.427,0.009,11.635,5.217,11.644,11.644V38.261z"/>
	<path fill="#FFFFFF" d="M89.031,142.764c0,1.769-1.434,3.203-3.203,3.203h-7.351v7.431c0,1.769-1.434,3.203-3.203,3.203
		s-3.203-1.435-3.203-3.203v-7.431h-7.479c-1.769,0-3.203-1.435-3.203-3.203c0-1.77,1.434-3.203,3.203-3.203h7.479v-7.416
		c0-1.769,1.434-3.203,3.203-3.203s3.203,1.435,3.203,3.203v7.416h7.415C87.636,139.596,89.031,141.02,89.031,142.764z"/>
	<path fill="#FFFFFF" d="M177.373,54.453c-6.431,0.018-11.658-5.181-11.676-11.611c-0.017-6.431,5.182-11.658,11.612-11.675
		c6.411-0.018,11.631,5.152,11.675,11.563c0.035,6.439-5.156,11.688-11.596,11.724C177.384,54.453,177.379,54.453,177.373,54.453z
		 M177.373,37.573c-2.893-0.018-5.251,2.313-5.269,5.206c-0.017,2.892,2.313,5.251,5.206,5.269c2.893,0.017,5.251-2.313,5.268-5.206
		c0.001-0.038,0-0.075,0-0.112c0-2.88-2.325-5.219-5.205-5.237V37.573z"/>
	<path fill="#FFFFFF" d="M153.654,79.421c-5.776-0.009-10.451-4.698-10.442-10.474s4.698-10.451,10.474-10.442
		c5.77,0.009,10.442,4.689,10.442,10.458C164.119,74.742,159.433,79.421,153.654,79.421z M153.654,64.911
		c-2.238,0.009-4.045,1.83-4.036,4.068c0.009,2.238,1.83,4.044,4.067,4.036c2.232-0.009,4.036-1.82,4.036-4.052
		c0-2.238-1.813-4.052-4.052-4.052C153.664,64.911,153.659,64.911,153.654,64.911z"/>
	<path fill="#FFFFFF" d="M173.081,106.023c-5.749,0-10.41-4.661-10.41-10.41s4.661-10.41,10.41-10.41s10.41,4.661,10.41,10.41
		C183.482,101.359,178.826,106.015,173.081,106.023z M173.081,91.609c-2.212,0-4.004,1.792-4.004,4.004s1.792,4.004,4.004,4.004
		c2.211,0,4.004-1.792,4.004-4.004C177.076,93.406,175.289,91.618,173.081,91.609z"/>
</g>
</svg>

                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Clean and Disinfect Objects                </h3>
                                    <p>Click edit  to change this text. Lorem ipsum dolor sit amet, cctetur adipiscing elit. Ut elit tellus, luctus. </p>
                                </div>
        
        <div class="icon-hover">
            <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="205px" height="205px" viewBox="0 0 205 205" enable-background="new 0 0 205 205" xml:space="preserve">
<title>icon5.1</title>
<g id="virus">
	<path fill="#FFFFFF" d="M59.626,141.898c-1.074-0.003-2.146-0.1-3.203-0.288c-6.084-0.987-11.294-4.903-13.934-10.475
		c-11.483-24.038-7.492-52.611,10.138-72.583c1.172-1.327,3.198-1.452,4.524-0.28s1.452,3.198,0.28,4.524
		c-15.931,18.045-19.537,43.864-9.161,65.583c1.754,3.68,5.202,6.266,9.225,6.919c4.129,0.726,8.352-0.614,11.307-3.587
		c3.823-3.74,4.87-9.486,2.61-14.334c-2.253-4.637-3.425-9.725-3.427-14.879c0.027-9.473,3.927-18.523,10.794-25.048
		c6.865-6.557,16.148-9.962,25.625-9.401c18.31,1.196,32.563,16.373,32.607,34.722c-0.024,4.336-0.866,8.628-2.482,12.652
		c-2.871,6.467,0.043,14.038,6.51,16.909c2.762,1.227,5.867,1.438,8.77,0.596c3.651-0.994,6.645-3.609,8.119-7.095
		c3.123-7.382,4.725-15.319,4.709-23.335c0-1.769,1.434-3.203,3.203-3.203s3.203,1.434,3.203,3.203
		c0.012,8.857-1.759,17.626-5.205,25.785c-2.227,5.291-6.762,9.266-12.3,10.778c-10.2,2.938-20.85-2.95-23.787-13.149
		c-1.228-4.262-0.942-8.816,0.805-12.892c1.329-3.272,2.024-6.767,2.05-10.298c-0.025-14.93-11.609-27.29-26.506-28.284
		c-15.481-0.878-28.742,10.96-29.62,26.441c-0.269,4.731,0.666,9.453,2.714,13.726c3.42,7.303,1.875,15.968-3.86,21.638
		C69.695,139.871,64.765,141.904,59.626,141.898z"/>
	<path fill="#FFFFFF" d="M198.258,90.536c-1.77,0-3.203,1.434-3.203,3.203v5.558H184.98c-0.738-19.672-8.513-38.427-21.909-52.852
		l7.143-7.127l3.924,3.924c1.252,1.251,3.281,1.251,4.532,0c1.252-1.251,1.252-3.281,0-4.532l-12.396-12.396
		c-1.257-1.247-3.286-1.24-4.532,0.016c-1.248,1.256-1.24,3.285,0.016,4.533l3.939,3.939l-7.143,7.127
		c-14.425-13.396-33.18-21.171-52.852-21.909V9.946h5.558c1.769,0,3.203-1.434,3.203-3.203s-1.435-3.203-3.203-3.203H93.739
		c-1.769,0-3.203,1.434-3.203,3.203s1.434,3.203,3.203,3.203h5.558V20.02c-19.672,0.738-38.427,8.513-52.852,21.909l-7.127-7.127
		l3.924-3.939c1.251-1.252,1.251-3.281,0-4.533s-3.281-1.251-4.532,0L26.313,38.726c-1.247,1.256-1.24,3.286,0.016,4.533
		c1.256,1.247,3.285,1.24,4.533-0.016l3.939-3.924l7.127,7.127C28.532,60.87,20.758,79.625,20.02,99.297H9.946v-5.558
		c0-1.769-1.434-3.203-3.203-3.203S3.54,91.97,3.54,93.739v17.521c0,1.769,1.434,3.203,3.203,3.203s3.203-1.435,3.203-3.203v-5.558
		H20.02c0.738,19.672,8.513,38.427,21.909,52.852l-7.127,7.143l-3.939-3.939c-1.252-1.252-3.281-1.252-4.533,0s-1.251,3.281,0,4.532
		l12.396,12.396c1.256,1.247,3.286,1.239,4.533-0.017s1.24-3.285-0.016-4.532l0,0l-3.924-3.924l7.127-7.143
		c14.425,13.396,33.179,21.171,52.852,21.909v10.074h-5.558c-1.769,0-3.203,1.434-3.203,3.203c0,1.769,1.434,3.203,3.203,3.203
		h17.521c1.769,0,3.203-1.435,3.203-3.203c0-1.77-1.435-3.203-3.203-3.203h-5.558V184.98c19.672-0.738,38.427-8.513,52.852-21.909
		l7.143,7.143l-3.939,3.924c-1.252,1.252-1.252,3.281,0,4.532c1.252,1.252,3.281,1.252,4.532,0l12.396-12.396
		c1.251-1.252,1.251-3.281,0-4.532c-1.252-1.252-3.281-1.252-4.532,0l-3.924,3.939l-7.159-7.127
		c13.396-14.425,21.171-33.18,21.909-52.852h10.074v5.558c0,1.769,1.434,3.203,3.203,3.203c1.769,0,3.203-1.435,3.203-3.203V93.739
		C201.461,91.97,200.026,90.536,198.258,90.536z M102.5,178.654c-42.059,0-76.154-34.096-76.154-76.154
		c0-42.059,34.096-76.154,76.154-76.154s76.154,34.096,76.154,76.154C178.61,144.541,144.541,178.61,102.5,178.654z"/>
	<path fill="#FFFFFF" d="M154.246,89.431c-5.678,0-10.281-4.604-10.281-10.282c0-5.679,4.604-10.282,10.281-10.282
		c5.68,0,10.282,4.604,10.282,10.282C164.52,84.824,159.922,89.422,154.246,89.431z M154.246,75.273
		c-2.141,0-3.875,1.735-3.875,3.876c0,2.14,1.734,3.875,3.875,3.875s3.876-1.735,3.876-3.875l0,0
		C158.113,77.012,156.383,75.282,154.246,75.273z"/>
	<path fill="#FFFFFF" d="M102.5,112.782c-5.679,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		s10.282,4.604,10.282,10.282l0,0C112.773,108.175,108.175,112.773,102.5,112.782z M102.5,98.624c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.876,3.876,3.876s3.876-1.735,3.876-3.876C106.367,100.363,104.637,98.633,102.5,98.624z"/>
	<path fill="#FFFFFF" d="M102.5,160.412c-5.679,0-10.282-4.604-10.282-10.281c0-5.68,4.604-10.282,10.282-10.282
		s10.282,4.603,10.282,10.282l0,0C112.773,155.806,108.175,160.404,102.5,160.412z M102.5,146.255c-2.141,0-3.876,1.735-3.876,3.876
		s1.735,3.875,3.876,3.875s3.876-1.734,3.876-3.875l0,0C106.376,147.99,104.641,146.255,102.5,146.255L102.5,146.255z"/>
	<path fill="#FFFFFF" d="M83.569,62.173c-5.678,0-10.282-4.604-10.282-10.282s4.604-10.282,10.282-10.282
		c5.679,0,10.282,4.604,10.282,10.282l0,0C93.843,57.565,89.245,62.164,83.569,62.173z M83.569,48.015
		c-2.14,0-3.875,1.735-3.875,3.876s1.735,3.876,3.875,3.876c2.141,0,3.876-1.735,3.876-3.876c-0.026-2.125-1.751-3.835-3.876-3.844
		V48.015z"/>
</g>
</svg>
        </div>

        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7919994d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7919994d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46442056" data-id="46442056" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-58f5141e elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="58f5141e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-5538e176 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="5538e176" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Total Cases</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-4b0511e elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="4b0511e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2f90fbca elementor-invisible elementor-widget elementor-widget-heading" data-id="2f90fbca" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">COVID-19 OUTBREAK</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-232ed50a elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="232ed50a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="767" height="371" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-2.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-2.png 767w, https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-2-300x145.png 300w" sizes="(max-width: 767px) 100vw, 767px" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-6ceddba9 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-widget-mobile__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="6ceddba9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="634" height="353" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-1.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-1.png 634w, https://kinforce.net/wiras/wp-content/uploads/2020/07/dots-bg-1-300x167.png 300w" sizes="(max-width: 634px) 100vw, 634px" />														</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-489ea1f4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="489ea1f4" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-65740dbe" data-id="65740dbe" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1fed664e elementor-widget elementor-widget-elementskit-funfact" data-id="1fed664e" data-element_type="widget" data-widget_type="elementskit-funfact.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
		<div class="elementskit-funfact text-center     ">
			
			<div class="elementskit-funfact-inner">
									<div class="funfact-icon"> 							<i ></i>

							
					</div>
								
				<div class="funfact-content">
					<div class="number-percentage-wraper">
												<span class="number-percentage"
						      data-value="187"
						      data-animation-duration="3500">0</span>
																	</div>

					<h2 class="funfact-title">TOTAL COUNTRIES</h2>							</div>
		</div>
		</div>


		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-241ca7cb" data-id="241ca7cb" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-41220aec elementor-widget elementor-widget-elementskit-funfact" data-id="41220aec" data-element_type="widget" data-widget_type="elementskit-funfact.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
		<div class="elementskit-funfact text-center     ">
			
			<div class="elementskit-funfact-inner">
									<div class="funfact-icon"> 							<i ></i>

							
					</div>
								
				<div class="funfact-content">
					<div class="number-percentage-wraper">
												<span class="number-percentage"
						      data-value="1051428"
						      data-animation-duration="3500">0</span>
																	</div>

					<h2 class="funfact-title">CONFIRMED CASES</h2>							</div>
		</div>
		</div>


		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ca57ef7" data-id="ca57ef7" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-21b6ceca elementor-widget elementor-widget-elementskit-funfact" data-id="21b6ceca" data-element_type="widget" data-widget_type="elementskit-funfact.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
		<div class="elementskit-funfact text-center     ">
			
			<div class="elementskit-funfact-inner">
									<div class="funfact-icon"> 							<i ></i>

							
					</div>
								
				<div class="funfact-content">
					<div class="number-percentage-wraper">
												<span class="number-percentage"
						      data-value="512311"
						      data-animation-duration="3500">0</span>
																	</div>

					<h2 class="funfact-title">DEATHS</h2>							</div>
		</div>
		</div>


		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-51358fcb" data-id="51358fcb" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1c4acb3f elementor-widget elementor-widget-elementskit-funfact" data-id="1c4acb3f" data-element_type="widget" data-widget_type="elementskit-funfact.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
		<div class="elementskit-funfact text-center     ">
			
			<div class="elementskit-funfact-inner">
									<div class="funfact-icon"> 							<i ></i>

							
					</div>
								
				<div class="funfact-content">
					<div class="number-percentage-wraper">
												<span class="number-percentage"
						      data-value="545101"
						      data-animation-duration="3500">0</span>
																	</div>

					<h2 class="funfact-title">RECOVERED</h2>							</div>
		</div>
		</div>


		</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-391e7283 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="391e7283" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-126cded7 elementor-invisible" data-id="126cded7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInLeft&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-343b8f50 elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="343b8f50" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:500,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="103" height="170" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/plus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-251be177 elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="251be177" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:500,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="185" height="302" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png 185w, https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics-184x300.png 184w" sizes="(max-width: 185px) 100vw, 185px" />														</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2120868b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2120868b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-62e2e929" data-id="62e2e929" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6c0f0913 elementor-absolute elementor-widget elementor-widget-image" data-id="6c0f0913" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-coronavirus-flat-icons-VFFUK7B-1.svg" class="elementor-animation-wobble-horizontal attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-55ef9a08 elementor-widget elementor-widget-text-editor" data-id="55ef9a08" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h6>DRY COUGH</h6><p>Sed ac molestie midec ullamcorper neue justo, nec vulputate commodo</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29713b2" data-id="29713b2" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-4ec650b0 elementor-absolute elementor-widget elementor-widget-image" data-id="4ec650b0" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-coronavirus-flat-icons-VFFUK7B-2.svg" class="elementor-animation-wobble-horizontal attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-472636ab elementor-widget elementor-widget-text-editor" data-id="472636ab" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h6>STRONG HEADACHE</h6>
Sed ac molestie midec ullamcorper neue justo, nec vulputate commodo					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3ba03667 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3ba03667" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6ed52697" data-id="6ed52697" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6428bdaa elementor-absolute elementor-widget elementor-widget-image" data-id="6428bdaa" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-coronavirus-flat-icons-VFFUK7B-3.svg" class="elementor-animation-wobble-horizontal attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-3e2d4ad6 elementor-widget elementor-widget-text-editor" data-id="3e2d4ad6" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h6>HOT FEVER</h6><p>Sed ac molestie midec ullamcorper neue justo, nec vulputate commodo</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-78f0826" data-id="78f0826" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1ba544c8 elementor-absolute elementor-widget elementor-widget-image" data-id="1ba544c8" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-coronavirus-flat-icons-VFFUK7B-4.svg" class="elementor-animation-wobble-horizontal attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-3f406957 elementor-widget elementor-widget-text-editor" data-id="3f406957" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h6>TIREDNESS</h6>
Sed ac molestie midec ullamcorper neue justo, nec vulputate commodo					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-25207ed5" data-id="25207ed5" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1cf6c6c5 elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="1cf6c6c5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3f71fce elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="3f71fce" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Symptoms</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-576675be elementor-invisible elementor-widget elementor-widget-heading" data-id="576675be" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">COVID-19 SYMPTOMS</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-54744d2e elementor-invisible elementor-widget elementor-widget-text-editor" data-id="54744d2e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Quisque egestas felis sed lacus tincidunt tristique. Vestibulum volutpat sit amet augue sed volutpat. Phasellus ultrices auctor posuere aliquam dap ibus eu tortor non sollicitudin. Sed lobortis odio.</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1e42c652 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-id="1e42c652" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:800}" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Quisque egestas felis sed lacus tincidunt tristique. Vestibulum pat dol amet augue sed volutpat mauris id commodo.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Phasellus ultrices auctor posuere. Aliquam dapibus eu tortor non licit udin. Sed lobortis raesent elementum, mollis libero accumsan.</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Quisque vel imperdiet est. Vestibulum mattis viverra leo, sed mpus sapien. Praesent mi mauris, dignissim vitae iaculis eu, mattis vel nisl. Sed vitae nisl ac lacus iaculis luctus et sed ante.</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-cfef755 elementor-invisible elementor-widget elementor-widget-button" data-id="cfef755" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Learn More</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-41245885 elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-hidden-phone elementor-invisible elementor-widget elementor-widget-elementskit-lottie" data-id="41245885" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1000,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="elementskit-lottie.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div id="ekit_lottie_41245885" class="ekit_lottie" data-autoplay="true" data-on-scroll="" data-speed="1" data-direction="" data-action="" data-renderer="svg" data-path="https://kinforce.net/wiras/wp-content/uploads/2020/07/lf30_editor_NRYiXY.json" data-loop="true">&nbsp;</div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-430f974a elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-elementskit-lottie" data-id="430f974a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1000,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="elementskit-lottie.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div id="ekit_lottie_430f974a" class="ekit_lottie" data-autoplay="true" data-on-scroll="" data-speed="1" data-direction="" data-action="" data-renderer="svg" data-path="https://kinforce.net/wiras/wp-content/uploads/2020/07/lf30_editor_NRYiXY.json" data-loop="true">&nbsp;</div></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-34b6addf elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="34b6addf" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2290cf3d" data-id="2290cf3d" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-55aea13e elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="55aea13e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-7e58d647 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="7e58d647" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Doctors</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-62d9ea8 elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="62d9ea8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-6e8ebee2 elementor-invisible elementor-widget elementor-widget-heading" data-id="6e8ebee2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">MEET OUR SPECIALISTS</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-2816007e elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="2816007e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="103" height="170" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/plus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-268ab295 elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="268ab295" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="185" height="302" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics.png 185w, https://kinforce.net/wiras/wp-content/uploads/2020/07/virus-graphics-184x300.png 184w" sizes="(max-width: 185px) 100vw, 185px" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1f0e3eac elementor-widget__width-initial elementor-absolute elementor-widget-tablet__width-initial elementor-invisible elementor-widget elementor-widget-image" data-id="1f0e3eac" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:800,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="166" height="83" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/zigzag-graphics.png" class="attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2a31479f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="2a31479f" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
						<div class="elementor-container elementor-column-gap-extended">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-56ed67b" data-id="56ed67b" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-533f7129 elementor-widget elementor-widget-elementskit-team" data-id="533f7129" data-element_type="widget" data-widget_type="elementskit-team.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con">
							
				<div class="profile-square-v square-v4 elementor-animation- ekit-team-style-hover_info">
					<div class="profile-card text-center">
						<div class="profile-header ekit-team-img" >
							<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctor-infographics-MVRVDSY.svg" alt="" />						</div><!-- .profile-header END -->
						<div class="profile-body">
							<h2 class="profile-title">
															Dr. KIMBERLY PEREZ														</h2>
							<p class="profile-designation">Nephrologists</p>
														<ul class="ekit-team-social-list">
			<li class="elementor-repeater-item-6a3bf8f">
			<a href="#">
				<i aria-hidden="true" class="icon icon-twitter-1"></i>			</a>
		</li>
			<li class="elementor-repeater-item-5e6309e">
			<a href="#">
				<i aria-hidden="true" class="fab fa-facebook"></i>			</a>
		</li>
			<li class="elementor-repeater-item-8b12d03">
			<a href="#">
				<i aria-hidden="true" class="icon icon-google-plus"></i>			</a>
		</li>
	</ul>
						</div>
					</div>
				</div>
			
				</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5d65d239" data-id="5d65d239" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-38759212 elementor-widget elementor-widget-elementskit-team" data-id="38759212" data-element_type="widget" data-widget_type="elementskit-team.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con">
							
				<div class="profile-square-v square-v4 elementor-animation- ekit-team-style-hover_info">
					<div class="profile-card text-center">
						<div class="profile-header ekit-team-img" >
							<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctor-infographics-design-AZ8BKV9.svg" class="attachment-full size-full" alt="" />						</div><!-- .profile-header END -->
						<div class="profile-body">
							<h2 class="profile-title">
															Dr. JOSIE BUCHANAN														</h2>
							<p class="profile-designation">Surgion Specialist</p>
														<ul class="ekit-team-social-list">
			<li class="elementor-repeater-item-6a3bf8f">
			<a href="#">
				<i aria-hidden="true" class="icon icon-twitter-1"></i>			</a>
		</li>
			<li class="elementor-repeater-item-5e6309e">
			<a href="#">
				<i aria-hidden="true" class="fab fa-facebook"></i>			</a>
		</li>
			<li class="elementor-repeater-item-8b12d03">
			<a href="#">
				<i aria-hidden="true" class="icon icon-google-plus"></i>			</a>
		</li>
	</ul>
						</div>
					</div>
				</div>
			
				</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-72ad34d1" data-id="72ad34d1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6ed70026 elementor-widget elementor-widget-elementskit-team" data-id="6ed70026" data-element_type="widget" data-widget_type="elementskit-team.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con">
							
				<div class="profile-square-v square-v4 elementor-animation- ekit-team-style-hover_info">
					<div class="profile-card text-center">
						<div class="profile-header ekit-team-img" >
							<img src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctor-infographics-design-7XBRHQM.svg" alt="elements-doctor-infographics-design-7XBRHQM" />						</div><!-- .profile-header END -->
						<div class="profile-body">
							<h2 class="profile-title">
															Dr. ALBERT DUNCAN														</h2>
							<p class="profile-designation">Throat Specialist</p>
														<ul class="ekit-team-social-list">
			<li class="elementor-repeater-item-6a3bf8f">
			<a href="#">
				<i aria-hidden="true" class="icon icon-twitter-1"></i>			</a>
		</li>
			<li class="elementor-repeater-item-5e6309e">
			<a href="#">
				<i aria-hidden="true" class="fab fa-facebook"></i>			</a>
		</li>
			<li class="elementor-repeater-item-8b12d03">
			<a href="#">
				<i aria-hidden="true" class="icon icon-google-plus"></i>			</a>
		</li>
	</ul>
						</div>
					</div>
				</div>
			
				</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2ebccf13 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ebccf13" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f8986cb" data-id="1f8986cb" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7a452f0a elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="7a452f0a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-71349bff elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="71349bff" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">FAQ</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-480b4dcd elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="480b4dcd" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:550}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-475615b6 elementor-invisible elementor-widget elementor-widget-heading" data-id="475615b6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">FREQUENTLY ASKED QUESTIONS</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2970a4fe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="2970a4fe" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-75aa2875" data-id="75aa2875" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-adae6c3 elementor-widget elementor-widget-elementskit-faq" data-id="adae6c3" data-element_type="widget" data-widget_type="elementskit-faq.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
                <div class="elementskit-single-faq elementor-repeater-item-ba39c6d">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">What is a novel COVID-19?</h2>
            </div>
            <div class="elementskit-faq-body">
                Far far away, behind the word Mountains far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmark            </div>
        </div>
                <div class="elementskit-single-faq elementor-repeater-item-d9dd0dd">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">How does the virus spread?</h2>
            </div>
            <div class="elementskit-faq-body">
                Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line            </div>
        </div>
                <div class="elementskit-single-faq elementor-repeater-item-b13e879">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">Will warm weather stop the outbreak of COVID-19?</h2>
            </div>
            <div class="elementskit-faq-body">
                Marks and devious Semikoli but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.            </div>
        </div>
        
    </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4634f2c5" data-id="4634f2c5" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-76beffc7 elementor-widget elementor-widget-elementskit-faq" data-id="76beffc7" data-element_type="widget" data-widget_type="elementskit-faq.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >
                <div class="elementskit-single-faq elementor-repeater-item-ba39c6d">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">Can mosquitoes or ticks spread the virus that causes COVID-19?</h2>
            </div>
            <div class="elementskit-faq-body">
                Far far away, behind the word Mountains far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmark            </div>
        </div>
                <div class="elementskit-single-faq elementor-repeater-item-d9dd0dd">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">How can I protect myself?</h2>
            </div>
            <div class="elementskit-faq-body">
                Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line            </div>
        </div>
                <div class="elementskit-single-faq elementor-repeater-item-b13e879">
            <div class="elementskit-faq-header">
                <h2 class="elementskit-faq-title">What cleaning products should I use to protect against COVID-19?</h2>
            </div>
            <div class="elementskit-faq-body">
                Marks and devious Semikoli but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.            </div>
        </div>
        
    </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-4d11c07e elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="4d11c07e" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="103" height="170" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/plus-graphics.png" class="attachment-full size-full" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-41b2ac1c elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-elementskit-lottie" data-id="41b2ac1c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800}" data-widget_type="elementskit-lottie.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div id="ekit_lottie_41b2ac1c" class="ekit_lottie" data-autoplay="true" data-on-scroll="" data-speed="1" data-direction="" data-action="" data-renderer="svg" data-path="https://kinforce.net/wiras/wp-content/uploads/2020/07/lf30_editor_NRYiXY.json" data-loop="true">&nbsp;</div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-29e97303 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-elementskit-lottie" data-id="29e97303" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:800}" data-widget_type="elementskit-lottie.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div id="ekit_lottie_29e97303" class="ekit_lottie" data-autoplay="true" data-on-scroll="" data-speed="1" data-direction="" data-action="" data-renderer="svg" data-path="https://kinforce.net/wiras/wp-content/uploads/2020/07/lf30_editor_NRYiXY.json" data-loop="true">&nbsp;</div></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-78955bf8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78955bf8" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-187f5839" data-id="187f5839" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-418b15f5 elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="418b15f5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-51f7696d elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-heading" data-id="51f7696d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Stay Safe</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-26f202b9 elementor-invisible elementor-widget elementor-widget-heading" data-id="26f202b9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">BE INFORMED ABOUT COVID-19</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-1a0f3b90 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="1a0f3b90" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:700}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Maecenas imperdiet metus massa, porttitor accumsan elit accumsan nec. Etiam luctus, velit vel maxi mus elementum, nunc augue vestibulum arcu.</p>					</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7ea1bee elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="7ea1bee" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:800}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-79971a76" data-id="79971a76" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1e62249d elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1e62249d" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Headache & Sore Throat</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-72421f1f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="72421f1f" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Fever</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-27a3b7e1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="27a3b7e1" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Shaking Chills</span>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-36c8890c" data-id="36c8890c" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6d96a718 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6d96a718" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Shortness of Breath</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-588ff639 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="588ff639" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Diarrhea</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-4e7d990c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4e7d990c" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-chevron-right-circle"></i>						</span>
										<span class="elementor-icon-list-text">Cough</span>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-25f32c45 elementor-invisible elementor-widget elementor-widget-button" data-id="25f32c45" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Learn More</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-792a3f59" data-id="792a3f59" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1718257f elementor-invisible elementor-widget elementor-widget-image" data-id="1718257f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="625" height="439" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctors-and-coronavirus-patients-use-masks-3C4XDCK.png" class="elementor-animation-rotate attachment-large size-large" alt="" loading="lazy" srcset="https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctors-and-coronavirus-patients-use-masks-3C4XDCK.png 625w, https://kinforce.net/wiras/wp-content/uploads/2020/07/elements-doctors-and-coronavirus-patients-use-masks-3C4XDCK-300x211.png 300w" sizes="(max-width: 625px) 100vw, 625px" />														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-16511b9c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16511b9c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19ad72fc" data-id="19ad72fc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-12fdbc9 elementor-widget elementor-widget-spacer" data-id="12fdbc9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7820d796 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7820d796" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-179725c5" data-id="179725c5" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2f00bfa9 elementor-widget elementor-widget-image" data-id="2f00bfa9" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="147" height="45" src="https://kinforce.net/wiras/wp-content/uploads/2020/07/footer-logo.png" class="attachment-large size-large" alt="" loading="lazy" />														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-9b0f2ab elementor-widget elementor-widget-text-editor" data-id="9b0f2ab" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				Lorem ipsum dolor sit amet, tetur <br> adipiscing elit nulla finibus.					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-1043db95 elementor-widget elementor-widget-elementskit-social-media" data-id="1043db95" data-element_type="widget" data-widget_type="elementskit-social-media.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >			 <ul class="ekit_social_media">
														<li class="elementor-repeater-item-6f6b210">
					    <a
						href="#" class="1" >
														
							<i aria-hidden="true" class="icon icon-twitter-1"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-b1d305c">
					    <a
						href="#" class="f" >
														
							<i aria-hidden="true" class="fab fa-facebook-f"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-e5c0414">
					    <a
						href="#" class="plus" >
														
							<i aria-hidden="true" class="icon icon-google-plus"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-88ff307">
					    <a
						href="#" class="in" >
														
							<i aria-hidden="true" class="fab fa-linkedin-in"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-11699e2">
					    <a
						href="#" class="instagram" >
														
							<i aria-hidden="true" class="fab fa-instagram"></i>									
                                                                                                            </a>
                    </li>
                    							</ul>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7c79a753" data-id="7c79a753" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-43311915 elementor-widget elementor-widget-heading" data-id="43311915" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Useful Links</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-6677685b elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6677685b" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-213dfc98 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="213dfc98" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Situation Reports</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Advice For Public</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Prevention</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Donor & Partners</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5fc0b9d0" data-id="5fc0b9d0" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-29e96742 elementor-widget elementor-widget-heading" data-id="29e96742" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Resources</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-79d920ff elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="79d920ff" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-247e8974 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="247e8974" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">How to Protect</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">How are Spreading</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Acceptable Use Policyy</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

											<span class="elementor-icon-list-text">Terms and Conditions</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1dd9d76a" data-id="1dd9d76a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2a48132 elementor-widget elementor-widget-heading" data-id="2a48132" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h6 class="elementor-heading-title elementor-size-default">Quick Contact</h6>		</div>
				</div>
				<div class="elementor-element elementor-element-5bd69e47 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5bd69e47" data-element_type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
					<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3e5ce941 elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3e5ce941" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-map-marker1"></i>						</span>
										<span class="elementor-icon-list-text">75/23 Folsom Ave, Suite 600 <br> San Francisco, CA 94107</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-envelope11"></i>						</span>
										<span class="elementor-icon-list-text">info@example.com</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="#">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-phone-call2"></i>						</span>
										<span class="elementor-icon-list-text">888-123-4587</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-8a5e45e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8a5e45e" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-60b24321" data-id="60b24321" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-59a6e4e1 elementor-widget elementor-widget-text-editor" data-id="59a6e4e1" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				Copyright © 2020 <a href=""> wiras <a> All rights reserved					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
@endsection