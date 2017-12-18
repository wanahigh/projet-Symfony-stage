<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b010bed11bb765bfabfb0f755839f60cec70770d39b087a2a6086a72c195ad7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b010bed11bb765bfabfb0f755839f60cec70770d39b087a2a6086a72c195ad7a->enter($__internal_b010bed11bb765bfabfb0f755839f60cec70770d39b087a2a6086a72c195ad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4664f4fce53a35e8c450c833cfab4b2434fad9e0ace62b5115f67df04f1ef456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4664f4fce53a35e8c450c833cfab4b2434fad9e0ace62b5115f67df04f1ef456->enter($__internal_4664f4fce53a35e8c450c833cfab4b2434fad9e0ace62b5115f67df04f1ef456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b010bed11bb765bfabfb0f755839f60cec70770d39b087a2a6086a72c195ad7a->leave($__internal_b010bed11bb765bfabfb0f755839f60cec70770d39b087a2a6086a72c195ad7a_prof);

        
        $__internal_4664f4fce53a35e8c450c833cfab4b2434fad9e0ace62b5115f67df04f1ef456->leave($__internal_4664f4fce53a35e8c450c833cfab4b2434fad9e0ace62b5115f67df04f1ef456_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1215e4b7aae6ebcef757c180f55a97986a290ce85945acd32375daed64e1e807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1215e4b7aae6ebcef757c180f55a97986a290ce85945acd32375daed64e1e807->enter($__internal_1215e4b7aae6ebcef757c180f55a97986a290ce85945acd32375daed64e1e807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_659c3cb6d3eed8399ae9679f270e7e1ea049d12fded0c8e8b42ef79130c9f666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659c3cb6d3eed8399ae9679f270e7e1ea049d12fded0c8e8b42ef79130c9f666->enter($__internal_659c3cb6d3eed8399ae9679f270e7e1ea049d12fded0c8e8b42ef79130c9f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_659c3cb6d3eed8399ae9679f270e7e1ea049d12fded0c8e8b42ef79130c9f666->leave($__internal_659c3cb6d3eed8399ae9679f270e7e1ea049d12fded0c8e8b42ef79130c9f666_prof);

        
        $__internal_1215e4b7aae6ebcef757c180f55a97986a290ce85945acd32375daed64e1e807->leave($__internal_1215e4b7aae6ebcef757c180f55a97986a290ce85945acd32375daed64e1e807_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_efb9de4e3c39e50cd13e6e3c5919bf2a919f4e94ea362451aa1d2941f6eba8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb9de4e3c39e50cd13e6e3c5919bf2a919f4e94ea362451aa1d2941f6eba8f9->enter($__internal_efb9de4e3c39e50cd13e6e3c5919bf2a919f4e94ea362451aa1d2941f6eba8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b163ca136f0ebaae0e9ac2a241577ab58ec8078644f28d2607b0cc90da5517aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163ca136f0ebaae0e9ac2a241577ab58ec8078644f28d2607b0cc90da5517aa->enter($__internal_b163ca136f0ebaae0e9ac2a241577ab58ec8078644f28d2607b0cc90da5517aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b163ca136f0ebaae0e9ac2a241577ab58ec8078644f28d2607b0cc90da5517aa->leave($__internal_b163ca136f0ebaae0e9ac2a241577ab58ec8078644f28d2607b0cc90da5517aa_prof);

        
        $__internal_efb9de4e3c39e50cd13e6e3c5919bf2a919f4e94ea362451aa1d2941f6eba8f9->leave($__internal_efb9de4e3c39e50cd13e6e3c5919bf2a919f4e94ea362451aa1d2941f6eba8f9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b2de5789ac8fb713837876aedf74d46c4526377b1ca9544ce1600d1c5ca901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b2de5789ac8fb713837876aedf74d46c4526377b1ca9544ce1600d1c5ca901->enter($__internal_53b2de5789ac8fb713837876aedf74d46c4526377b1ca9544ce1600d1c5ca901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a240341f45ff666341413c23bf1ea93db75c88f13bb3d1ed433a1c1b776bca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a240341f45ff666341413c23bf1ea93db75c88f13bb3d1ed433a1c1b776bca4->enter($__internal_2a240341f45ff666341413c23bf1ea93db75c88f13bb3d1ed433a1c1b776bca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a240341f45ff666341413c23bf1ea93db75c88f13bb3d1ed433a1c1b776bca4->leave($__internal_2a240341f45ff666341413c23bf1ea93db75c88f13bb3d1ed433a1c1b776bca4_prof);

        
        $__internal_53b2de5789ac8fb713837876aedf74d46c4526377b1ca9544ce1600d1c5ca901->leave($__internal_53b2de5789ac8fb713837876aedf74d46c4526377b1ca9544ce1600d1c5ca901_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
