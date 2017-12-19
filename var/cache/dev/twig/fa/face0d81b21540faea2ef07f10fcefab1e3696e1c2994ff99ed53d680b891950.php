<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_cd524f8dd836791a8a8b335d54ec10a6029cc436046cb17de2bad48de4a1a3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_855a56b1cba58c49be18d775077d38964321e1d23b08e9ca65527afc3e4ebb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855a56b1cba58c49be18d775077d38964321e1d23b08e9ca65527afc3e4ebb5b->enter($__internal_855a56b1cba58c49be18d775077d38964321e1d23b08e9ca65527afc3e4ebb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8ea1f7192665af5b6019ad528e3c59bb590fb1375243f91dbf97dbb2e94a68c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea1f7192665af5b6019ad528e3c59bb590fb1375243f91dbf97dbb2e94a68c8->enter($__internal_8ea1f7192665af5b6019ad528e3c59bb590fb1375243f91dbf97dbb2e94a68c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855a56b1cba58c49be18d775077d38964321e1d23b08e9ca65527afc3e4ebb5b->leave($__internal_855a56b1cba58c49be18d775077d38964321e1d23b08e9ca65527afc3e4ebb5b_prof);

        
        $__internal_8ea1f7192665af5b6019ad528e3c59bb590fb1375243f91dbf97dbb2e94a68c8->leave($__internal_8ea1f7192665af5b6019ad528e3c59bb590fb1375243f91dbf97dbb2e94a68c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14ac95e8eba93990724d6de5d5f650b9b54d69943570d7ec6704fa20871a0219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ac95e8eba93990724d6de5d5f650b9b54d69943570d7ec6704fa20871a0219->enter($__internal_14ac95e8eba93990724d6de5d5f650b9b54d69943570d7ec6704fa20871a0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_126a8c60cc63ddef878bb40904aa31bc456c074cbe5415f3923dd0a93070cf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126a8c60cc63ddef878bb40904aa31bc456c074cbe5415f3923dd0a93070cf44->enter($__internal_126a8c60cc63ddef878bb40904aa31bc456c074cbe5415f3923dd0a93070cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_126a8c60cc63ddef878bb40904aa31bc456c074cbe5415f3923dd0a93070cf44->leave($__internal_126a8c60cc63ddef878bb40904aa31bc456c074cbe5415f3923dd0a93070cf44_prof);

        
        $__internal_14ac95e8eba93990724d6de5d5f650b9b54d69943570d7ec6704fa20871a0219->leave($__internal_14ac95e8eba93990724d6de5d5f650b9b54d69943570d7ec6704fa20871a0219_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
