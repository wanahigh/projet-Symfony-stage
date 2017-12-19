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
        $__internal_eea248716a660f1003e0ddd4a9dc488f35634f5a7ff8e327c8ffc6a9184ce6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea248716a660f1003e0ddd4a9dc488f35634f5a7ff8e327c8ffc6a9184ce6de->enter($__internal_eea248716a660f1003e0ddd4a9dc488f35634f5a7ff8e327c8ffc6a9184ce6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_7bd9d673b88cea13a3472ada82ca57967cebb3fdce79f4e642e6f70c78d2bd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd9d673b88cea13a3472ada82ca57967cebb3fdce79f4e642e6f70c78d2bd02->enter($__internal_7bd9d673b88cea13a3472ada82ca57967cebb3fdce79f4e642e6f70c78d2bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_eea248716a660f1003e0ddd4a9dc488f35634f5a7ff8e327c8ffc6a9184ce6de->leave($__internal_eea248716a660f1003e0ddd4a9dc488f35634f5a7ff8e327c8ffc6a9184ce6de_prof);

        
        $__internal_7bd9d673b88cea13a3472ada82ca57967cebb3fdce79f4e642e6f70c78d2bd02->leave($__internal_7bd9d673b88cea13a3472ada82ca57967cebb3fdce79f4e642e6f70c78d2bd02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c30a62d608bda54f5e2bc3f2b122caea131d7eb6da76cc3049c5ccf9dfd5a311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30a62d608bda54f5e2bc3f2b122caea131d7eb6da76cc3049c5ccf9dfd5a311->enter($__internal_c30a62d608bda54f5e2bc3f2b122caea131d7eb6da76cc3049c5ccf9dfd5a311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca7525c0666473e3a751b0be89a5a327e26ef3a4b899db528ad2c56ae949be32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7525c0666473e3a751b0be89a5a327e26ef3a4b899db528ad2c56ae949be32->enter($__internal_ca7525c0666473e3a751b0be89a5a327e26ef3a4b899db528ad2c56ae949be32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ca7525c0666473e3a751b0be89a5a327e26ef3a4b899db528ad2c56ae949be32->leave($__internal_ca7525c0666473e3a751b0be89a5a327e26ef3a4b899db528ad2c56ae949be32_prof);

        
        $__internal_c30a62d608bda54f5e2bc3f2b122caea131d7eb6da76cc3049c5ccf9dfd5a311->leave($__internal_c30a62d608bda54f5e2bc3f2b122caea131d7eb6da76cc3049c5ccf9dfd5a311_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1245b0354f3a14b97df332fccdf49894a646274ea10a940ddb8970902d935585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1245b0354f3a14b97df332fccdf49894a646274ea10a940ddb8970902d935585->enter($__internal_1245b0354f3a14b97df332fccdf49894a646274ea10a940ddb8970902d935585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6c0282be6e41b56b1ee4d3d287bcc96e41791859b04625f991413cd687b3a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c0282be6e41b56b1ee4d3d287bcc96e41791859b04625f991413cd687b3a61->enter($__internal_d6c0282be6e41b56b1ee4d3d287bcc96e41791859b04625f991413cd687b3a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d6c0282be6e41b56b1ee4d3d287bcc96e41791859b04625f991413cd687b3a61->leave($__internal_d6c0282be6e41b56b1ee4d3d287bcc96e41791859b04625f991413cd687b3a61_prof);

        
        $__internal_1245b0354f3a14b97df332fccdf49894a646274ea10a940ddb8970902d935585->leave($__internal_1245b0354f3a14b97df332fccdf49894a646274ea10a940ddb8970902d935585_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_72194c3f4d61d7c423c32f8450b1eca87650ca7c9756b25b35b8e08def2bfa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72194c3f4d61d7c423c32f8450b1eca87650ca7c9756b25b35b8e08def2bfa72->enter($__internal_72194c3f4d61d7c423c32f8450b1eca87650ca7c9756b25b35b8e08def2bfa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3891318f1893632eec85bf31f71506d3d4bfa73a2fe22aaeb55d3d19bd44a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3891318f1893632eec85bf31f71506d3d4bfa73a2fe22aaeb55d3d19bd44a09->enter($__internal_d3891318f1893632eec85bf31f71506d3d4bfa73a2fe22aaeb55d3d19bd44a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3891318f1893632eec85bf31f71506d3d4bfa73a2fe22aaeb55d3d19bd44a09->leave($__internal_d3891318f1893632eec85bf31f71506d3d4bfa73a2fe22aaeb55d3d19bd44a09_prof);

        
        $__internal_72194c3f4d61d7c423c32f8450b1eca87650ca7c9756b25b35b8e08def2bfa72->leave($__internal_72194c3f4d61d7c423c32f8450b1eca87650ca7c9756b25b35b8e08def2bfa72_prof);

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
