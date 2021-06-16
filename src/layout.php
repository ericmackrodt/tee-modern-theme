<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Eric Mackrodt">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->e($siteName) ?>
        <?php if ($title) : ?>
            | <?= $title ?>
        <?php endif; ?>
    </title>
    <link rel="stylesheet" href="/templates/modern/css/modern.css" />
    <script>
        if (!!window.fetch && !window.location.protocol.includes("https") && !window.location.host.includes("localhost")) {
            window.location = window.location.href.replace("http://", "https://")
        }
    </script>
    <?= $this->section('seo') ?>
</head>

<body>
    <div id="root">
        <desktop v-slot="mainDesk" desk-id="main">
            <window class="window-margin main" window-id="main" v-bind:desktop="mainDesk" title="The Eric Experiment" icon="/templates/modern/public/root-icon.png">
                <template v-slot:top>
                    <div id="banner"></div>

                    <div class="menubar">
                        <?php $this->insert('modern::main-menu') ?>
                    </div>
                </template>
                <section id="page">
                    <desktop v-slot="sidePanelDesk" desk-id="side-panel">
                        <?= $this->section('content') ?>
                        <?php if ($showSideContent) : ?>
                            <?php $this->insert('modern::side-content') ?>
                        <?php endif; ?>
                    </desktop>
                </section>
                <section id="footer">
                    <?php $this->insert('modern::tags') ?>
                </section>
            </window>
        </desktop>
    </div>
    <script type="text/javascript" src="/templates/modern/js/client.js"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1B8B8NBRJD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-1B8B8NBRJD');
    </script>

    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://the-eric-experiment.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</body>

</html>