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
        $__internal_46efea58bd6cc8fdca784feb371253d772af1e04794b0340e0d3405e48369b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46efea58bd6cc8fdca784feb371253d772af1e04794b0340e0d3405e48369b7a->enter($__internal_46efea58bd6cc8fdca784feb371253d772af1e04794b0340e0d3405e48369b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3ce5ec18dcb01880ede3d1e7b487c2c14ea475c9787ce7ad98f335b50d8c06ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce5ec18dcb01880ede3d1e7b487c2c14ea475c9787ce7ad98f335b50d8c06ef->enter($__internal_3ce5ec18dcb01880ede3d1e7b487c2c14ea475c9787ce7ad98f335b50d8c06ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_46efea58bd6cc8fdca784feb371253d772af1e04794b0340e0d3405e48369b7a->leave($__internal_46efea58bd6cc8fdca784feb371253d772af1e04794b0340e0d3405e48369b7a_prof);

        
        $__internal_3ce5ec18dcb01880ede3d1e7b487c2c14ea475c9787ce7ad98f335b50d8c06ef->leave($__internal_3ce5ec18dcb01880ede3d1e7b487c2c14ea475c9787ce7ad98f335b50d8c06ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_101c029f77e53ec86310abda02b1dd5562715890b8557350fac449cbdb01df71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101c029f77e53ec86310abda02b1dd5562715890b8557350fac449cbdb01df71->enter($__internal_101c029f77e53ec86310abda02b1dd5562715890b8557350fac449cbdb01df71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdfcfa605b6937958f553ea28144ffbf1b81e8147a8c355e04c22bd238e2df5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfcfa605b6937958f553ea28144ffbf1b81e8147a8c355e04c22bd238e2df5c->enter($__internal_bdfcfa605b6937958f553ea28144ffbf1b81e8147a8c355e04c22bd238e2df5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bdfcfa605b6937958f553ea28144ffbf1b81e8147a8c355e04c22bd238e2df5c->leave($__internal_bdfcfa605b6937958f553ea28144ffbf1b81e8147a8c355e04c22bd238e2df5c_prof);

        
        $__internal_101c029f77e53ec86310abda02b1dd5562715890b8557350fac449cbdb01df71->leave($__internal_101c029f77e53ec86310abda02b1dd5562715890b8557350fac449cbdb01df71_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6828ce7ed3ba9d9a77705010fbafeb00bf35e5312da237966c4006c4f6238bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6828ce7ed3ba9d9a77705010fbafeb00bf35e5312da237966c4006c4f6238bfb->enter($__internal_6828ce7ed3ba9d9a77705010fbafeb00bf35e5312da237966c4006c4f6238bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88b8336aab77d91eb95b99ec18ca8f6e027d88fd74ac286120f8d2e89d5d9d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b8336aab77d91eb95b99ec18ca8f6e027d88fd74ac286120f8d2e89d5d9d26->enter($__internal_88b8336aab77d91eb95b99ec18ca8f6e027d88fd74ac286120f8d2e89d5d9d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_88b8336aab77d91eb95b99ec18ca8f6e027d88fd74ac286120f8d2e89d5d9d26->leave($__internal_88b8336aab77d91eb95b99ec18ca8f6e027d88fd74ac286120f8d2e89d5d9d26_prof);

        
        $__internal_6828ce7ed3ba9d9a77705010fbafeb00bf35e5312da237966c4006c4f6238bfb->leave($__internal_6828ce7ed3ba9d9a77705010fbafeb00bf35e5312da237966c4006c4f6238bfb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_88eab28ce6bccdc3ff3bba25663a9cce4598925962c170f9bdae336eb20e3f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88eab28ce6bccdc3ff3bba25663a9cce4598925962c170f9bdae336eb20e3f9c->enter($__internal_88eab28ce6bccdc3ff3bba25663a9cce4598925962c170f9bdae336eb20e3f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_552eae3d863ed3f40d3fd6a75d59e23cd608c12ab2245d06a4e3723b899a6784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552eae3d863ed3f40d3fd6a75d59e23cd608c12ab2245d06a4e3723b899a6784->enter($__internal_552eae3d863ed3f40d3fd6a75d59e23cd608c12ab2245d06a4e3723b899a6784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_552eae3d863ed3f40d3fd6a75d59e23cd608c12ab2245d06a4e3723b899a6784->leave($__internal_552eae3d863ed3f40d3fd6a75d59e23cd608c12ab2245d06a4e3723b899a6784_prof);

        
        $__internal_88eab28ce6bccdc3ff3bba25663a9cce4598925962c170f9bdae336eb20e3f9c->leave($__internal_88eab28ce6bccdc3ff3bba25663a9cce4598925962c170f9bdae336eb20e3f9c_prof);

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
