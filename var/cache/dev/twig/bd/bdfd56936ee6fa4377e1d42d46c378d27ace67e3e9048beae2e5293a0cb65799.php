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
        $__internal_111917ddd9618652c4a85d5e049d2562beb993cd3cbccf2eb5dd0b842e5ce5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111917ddd9618652c4a85d5e049d2562beb993cd3cbccf2eb5dd0b842e5ce5ed->enter($__internal_111917ddd9618652c4a85d5e049d2562beb993cd3cbccf2eb5dd0b842e5ce5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_021b8385f0ac7e010075e6a5f745f9a95a0ade65a2254fff9871e18dc0cba5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021b8385f0ac7e010075e6a5f745f9a95a0ade65a2254fff9871e18dc0cba5af->enter($__internal_021b8385f0ac7e010075e6a5f745f9a95a0ade65a2254fff9871e18dc0cba5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_111917ddd9618652c4a85d5e049d2562beb993cd3cbccf2eb5dd0b842e5ce5ed->leave($__internal_111917ddd9618652c4a85d5e049d2562beb993cd3cbccf2eb5dd0b842e5ce5ed_prof);

        
        $__internal_021b8385f0ac7e010075e6a5f745f9a95a0ade65a2254fff9871e18dc0cba5af->leave($__internal_021b8385f0ac7e010075e6a5f745f9a95a0ade65a2254fff9871e18dc0cba5af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06cc318505ba1e4c5c537494ddd2c883f23337ce6345c83aa17187e916a68680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cc318505ba1e4c5c537494ddd2c883f23337ce6345c83aa17187e916a68680->enter($__internal_06cc318505ba1e4c5c537494ddd2c883f23337ce6345c83aa17187e916a68680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9166528391033918286e3aecf9d49366a6bf6f3e2a4df5fba3ec863165b992a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9166528391033918286e3aecf9d49366a6bf6f3e2a4df5fba3ec863165b992a->enter($__internal_e9166528391033918286e3aecf9d49366a6bf6f3e2a4df5fba3ec863165b992a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e9166528391033918286e3aecf9d49366a6bf6f3e2a4df5fba3ec863165b992a->leave($__internal_e9166528391033918286e3aecf9d49366a6bf6f3e2a4df5fba3ec863165b992a_prof);

        
        $__internal_06cc318505ba1e4c5c537494ddd2c883f23337ce6345c83aa17187e916a68680->leave($__internal_06cc318505ba1e4c5c537494ddd2c883f23337ce6345c83aa17187e916a68680_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cffaef9f0402b8019281078feb259eeb7ca2651d863b9ba50c80396694b1163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cffaef9f0402b8019281078feb259eeb7ca2651d863b9ba50c80396694b1163->enter($__internal_0cffaef9f0402b8019281078feb259eeb7ca2651d863b9ba50c80396694b1163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0dbf244512e15888947d9b2b188c61abe75933ab1e361916ca15ac4a3343f0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbf244512e15888947d9b2b188c61abe75933ab1e361916ca15ac4a3343f0f8->enter($__internal_0dbf244512e15888947d9b2b188c61abe75933ab1e361916ca15ac4a3343f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0dbf244512e15888947d9b2b188c61abe75933ab1e361916ca15ac4a3343f0f8->leave($__internal_0dbf244512e15888947d9b2b188c61abe75933ab1e361916ca15ac4a3343f0f8_prof);

        
        $__internal_0cffaef9f0402b8019281078feb259eeb7ca2651d863b9ba50c80396694b1163->leave($__internal_0cffaef9f0402b8019281078feb259eeb7ca2651d863b9ba50c80396694b1163_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0edf5e5bb5a884b9d286067c31c1e2709f6ffe97f477d137e1e60e8cca2e29fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edf5e5bb5a884b9d286067c31c1e2709f6ffe97f477d137e1e60e8cca2e29fd->enter($__internal_0edf5e5bb5a884b9d286067c31c1e2709f6ffe97f477d137e1e60e8cca2e29fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f37ca39c2e3dd378cb846f844b7ba4a2a318660f08597df492870f760199e1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37ca39c2e3dd378cb846f844b7ba4a2a318660f08597df492870f760199e1bc->enter($__internal_f37ca39c2e3dd378cb846f844b7ba4a2a318660f08597df492870f760199e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f37ca39c2e3dd378cb846f844b7ba4a2a318660f08597df492870f760199e1bc->leave($__internal_f37ca39c2e3dd378cb846f844b7ba4a2a318660f08597df492870f760199e1bc_prof);

        
        $__internal_0edf5e5bb5a884b9d286067c31c1e2709f6ffe97f477d137e1e60e8cca2e29fd->leave($__internal_0edf5e5bb5a884b9d286067c31c1e2709f6ffe97f477d137e1e60e8cca2e29fd_prof);

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
