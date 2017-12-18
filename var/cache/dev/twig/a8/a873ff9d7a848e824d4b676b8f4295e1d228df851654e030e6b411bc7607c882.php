<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3e55f33fa5d23c173cda8be074f71c3c1728279b620075187035b9d2f68c1012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4a8948fc5527f620030efaa3c7fed3b4b208072b25ec659225ff1dfafb032334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8948fc5527f620030efaa3c7fed3b4b208072b25ec659225ff1dfafb032334->enter($__internal_4a8948fc5527f620030efaa3c7fed3b4b208072b25ec659225ff1dfafb032334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5641aeef1fd9c64446013fd9ec7c6f2cd67bc742d1b2b0fa18972195ffdc495a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5641aeef1fd9c64446013fd9ec7c6f2cd67bc742d1b2b0fa18972195ffdc495a->enter($__internal_5641aeef1fd9c64446013fd9ec7c6f2cd67bc742d1b2b0fa18972195ffdc495a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8948fc5527f620030efaa3c7fed3b4b208072b25ec659225ff1dfafb032334->leave($__internal_4a8948fc5527f620030efaa3c7fed3b4b208072b25ec659225ff1dfafb032334_prof);

        
        $__internal_5641aeef1fd9c64446013fd9ec7c6f2cd67bc742d1b2b0fa18972195ffdc495a->leave($__internal_5641aeef1fd9c64446013fd9ec7c6f2cd67bc742d1b2b0fa18972195ffdc495a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_825043b34587b3304022107a1f46db52473f0799efccfcbe5ec09ba933262af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825043b34587b3304022107a1f46db52473f0799efccfcbe5ec09ba933262af7->enter($__internal_825043b34587b3304022107a1f46db52473f0799efccfcbe5ec09ba933262af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_717645ed640dc431ced710e777d83fbca8404b26e9dfc33245c37b4ce1958266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717645ed640dc431ced710e777d83fbca8404b26e9dfc33245c37b4ce1958266->enter($__internal_717645ed640dc431ced710e777d83fbca8404b26e9dfc33245c37b4ce1958266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_717645ed640dc431ced710e777d83fbca8404b26e9dfc33245c37b4ce1958266->leave($__internal_717645ed640dc431ced710e777d83fbca8404b26e9dfc33245c37b4ce1958266_prof);

        
        $__internal_825043b34587b3304022107a1f46db52473f0799efccfcbe5ec09ba933262af7->leave($__internal_825043b34587b3304022107a1f46db52473f0799efccfcbe5ec09ba933262af7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
