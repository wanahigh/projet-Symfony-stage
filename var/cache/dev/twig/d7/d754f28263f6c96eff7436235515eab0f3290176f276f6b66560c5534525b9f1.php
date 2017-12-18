<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b7fe15bdd270b7e90386bc8f269169df3d22b45445dea7aab7de0b53f1085ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7fe15bdd270b7e90386bc8f269169df3d22b45445dea7aab7de0b53f1085ba->enter($__internal_8b7fe15bdd270b7e90386bc8f269169df3d22b45445dea7aab7de0b53f1085ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_f07f59d78115e8f16bb28dcb84c1fd1aaa869786f70bb52e462d15ef7671467f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07f59d78115e8f16bb28dcb84c1fd1aaa869786f70bb52e462d15ef7671467f->enter($__internal_f07f59d78115e8f16bb28dcb84c1fd1aaa869786f70bb52e462d15ef7671467f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7fe15bdd270b7e90386bc8f269169df3d22b45445dea7aab7de0b53f1085ba->leave($__internal_8b7fe15bdd270b7e90386bc8f269169df3d22b45445dea7aab7de0b53f1085ba_prof);

        
        $__internal_f07f59d78115e8f16bb28dcb84c1fd1aaa869786f70bb52e462d15ef7671467f->leave($__internal_f07f59d78115e8f16bb28dcb84c1fd1aaa869786f70bb52e462d15ef7671467f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7a91199466d425d093fb1ce7756c42909d9b72672b864f1c243515e7419f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7a91199466d425d093fb1ce7756c42909d9b72672b864f1c243515e7419f35->enter($__internal_ba7a91199466d425d093fb1ce7756c42909d9b72672b864f1c243515e7419f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0289da6fc5222dc4df60125f2b594bb98e0d8cff275315cec8bf9add50a80e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0289da6fc5222dc4df60125f2b594bb98e0d8cff275315cec8bf9add50a80e4->enter($__internal_b0289da6fc5222dc4df60125f2b594bb98e0d8cff275315cec8bf9add50a80e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_b0289da6fc5222dc4df60125f2b594bb98e0d8cff275315cec8bf9add50a80e4->leave($__internal_b0289da6fc5222dc4df60125f2b594bb98e0d8cff275315cec8bf9add50a80e4_prof);

        
        $__internal_ba7a91199466d425d093fb1ce7756c42909d9b72672b864f1c243515e7419f35->leave($__internal_ba7a91199466d425d093fb1ce7756c42909d9b72672b864f1c243515e7419f35_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b20fc41ee7d056d0cd939721af236d37ce129ff0be1d3083e039fa93601e1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b20fc41ee7d056d0cd939721af236d37ce129ff0be1d3083e039fa93601e1b3->enter($__internal_9b20fc41ee7d056d0cd939721af236d37ce129ff0be1d3083e039fa93601e1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_849d2c864e321c5a7bd2cf03eb36852543ae7422e939669bf0506ddc1116047f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849d2c864e321c5a7bd2cf03eb36852543ae7422e939669bf0506ddc1116047f->enter($__internal_849d2c864e321c5a7bd2cf03eb36852543ae7422e939669bf0506ddc1116047f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_849d2c864e321c5a7bd2cf03eb36852543ae7422e939669bf0506ddc1116047f->leave($__internal_849d2c864e321c5a7bd2cf03eb36852543ae7422e939669bf0506ddc1116047f_prof);

        
        $__internal_9b20fc41ee7d056d0cd939721af236d37ce129ff0be1d3083e039fa93601e1b3->leave($__internal_9b20fc41ee7d056d0cd939721af236d37ce129ff0be1d3083e039fa93601e1b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  57 => 8,  55 => 7,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {% block fos_user_content %}{% endblock %}
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Projet-Symfony-master/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
