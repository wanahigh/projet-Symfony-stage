<?php

/* @Twig/layout.html.twig */
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
        $__internal_84f9cf34cb841b13c5c2566fa149fd22eb045da9346418b55a137fcb08792887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f9cf34cb841b13c5c2566fa149fd22eb045da9346418b55a137fcb08792887->enter($__internal_84f9cf34cb841b13c5c2566fa149fd22eb045da9346418b55a137fcb08792887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_75febb68941a08b6bf2b8c760ce0cdb1b6c7486bbb595ce2deb3df28badd2ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75febb68941a08b6bf2b8c760ce0cdb1b6c7486bbb595ce2deb3df28badd2ed0->enter($__internal_75febb68941a08b6bf2b8c760ce0cdb1b6c7486bbb595ce2deb3df28badd2ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_84f9cf34cb841b13c5c2566fa149fd22eb045da9346418b55a137fcb08792887->leave($__internal_84f9cf34cb841b13c5c2566fa149fd22eb045da9346418b55a137fcb08792887_prof);

        
        $__internal_75febb68941a08b6bf2b8c760ce0cdb1b6c7486bbb595ce2deb3df28badd2ed0->leave($__internal_75febb68941a08b6bf2b8c760ce0cdb1b6c7486bbb595ce2deb3df28badd2ed0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07953d90b51b3b1e00fa9bfaf4e39c9eb60a73a23ffd599638536c88322fd8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07953d90b51b3b1e00fa9bfaf4e39c9eb60a73a23ffd599638536c88322fd8e7->enter($__internal_07953d90b51b3b1e00fa9bfaf4e39c9eb60a73a23ffd599638536c88322fd8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_133ee7271443f9329afe0597c0fbdb32eceb4295a0e8e25a79780f580a194b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133ee7271443f9329afe0597c0fbdb32eceb4295a0e8e25a79780f580a194b3a->enter($__internal_133ee7271443f9329afe0597c0fbdb32eceb4295a0e8e25a79780f580a194b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_133ee7271443f9329afe0597c0fbdb32eceb4295a0e8e25a79780f580a194b3a->leave($__internal_133ee7271443f9329afe0597c0fbdb32eceb4295a0e8e25a79780f580a194b3a_prof);

        
        $__internal_07953d90b51b3b1e00fa9bfaf4e39c9eb60a73a23ffd599638536c88322fd8e7->leave($__internal_07953d90b51b3b1e00fa9bfaf4e39c9eb60a73a23ffd599638536c88322fd8e7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cae46fe691da039e02d1182fe33db7fb467e667be07a8a0d6632277b0d7a3f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae46fe691da039e02d1182fe33db7fb467e667be07a8a0d6632277b0d7a3f0d->enter($__internal_cae46fe691da039e02d1182fe33db7fb467e667be07a8a0d6632277b0d7a3f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_725defcda9a7ef50d86c33f7a5080db709ca72f8efa3cf1c36b870c1a7f624f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725defcda9a7ef50d86c33f7a5080db709ca72f8efa3cf1c36b870c1a7f624f7->enter($__internal_725defcda9a7ef50d86c33f7a5080db709ca72f8efa3cf1c36b870c1a7f624f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_725defcda9a7ef50d86c33f7a5080db709ca72f8efa3cf1c36b870c1a7f624f7->leave($__internal_725defcda9a7ef50d86c33f7a5080db709ca72f8efa3cf1c36b870c1a7f624f7_prof);

        
        $__internal_cae46fe691da039e02d1182fe33db7fb467e667be07a8a0d6632277b0d7a3f0d->leave($__internal_cae46fe691da039e02d1182fe33db7fb467e667be07a8a0d6632277b0d7a3f0d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e40e95848aa8d72f85e3d470ffc85d06e98a761e520a91de61ce61b3625e759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e40e95848aa8d72f85e3d470ffc85d06e98a761e520a91de61ce61b3625e759->enter($__internal_2e40e95848aa8d72f85e3d470ffc85d06e98a761e520a91de61ce61b3625e759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_413ccbaef05e279f55c6cd66c10e80b32e0fa4902fe83573efaf53f2fe2e8435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413ccbaef05e279f55c6cd66c10e80b32e0fa4902fe83573efaf53f2fe2e8435->enter($__internal_413ccbaef05e279f55c6cd66c10e80b32e0fa4902fe83573efaf53f2fe2e8435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_413ccbaef05e279f55c6cd66c10e80b32e0fa4902fe83573efaf53f2fe2e8435->leave($__internal_413ccbaef05e279f55c6cd66c10e80b32e0fa4902fe83573efaf53f2fe2e8435_prof);

        
        $__internal_2e40e95848aa8d72f85e3d470ffc85d06e98a761e520a91de61ce61b3625e759->leave($__internal_2e40e95848aa8d72f85e3d470ffc85d06e98a761e520a91de61ce61b3625e759_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
