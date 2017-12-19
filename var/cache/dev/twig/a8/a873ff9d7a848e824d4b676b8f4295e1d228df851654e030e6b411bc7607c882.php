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
        $__internal_9af533a1a1fa3be6722eeef5bf57634155ad0a4b9a41141591c8a34ed16a6b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af533a1a1fa3be6722eeef5bf57634155ad0a4b9a41141591c8a34ed16a6b42->enter($__internal_9af533a1a1fa3be6722eeef5bf57634155ad0a4b9a41141591c8a34ed16a6b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_fd9df95bef0f2427f2ec24f83a4a940cfc69b7aeeb37c1decc53eae395980642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9df95bef0f2427f2ec24f83a4a940cfc69b7aeeb37c1decc53eae395980642->enter($__internal_fd9df95bef0f2427f2ec24f83a4a940cfc69b7aeeb37c1decc53eae395980642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9af533a1a1fa3be6722eeef5bf57634155ad0a4b9a41141591c8a34ed16a6b42->leave($__internal_9af533a1a1fa3be6722eeef5bf57634155ad0a4b9a41141591c8a34ed16a6b42_prof);

        
        $__internal_fd9df95bef0f2427f2ec24f83a4a940cfc69b7aeeb37c1decc53eae395980642->leave($__internal_fd9df95bef0f2427f2ec24f83a4a940cfc69b7aeeb37c1decc53eae395980642_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ab147996e36a24c568d0bc9b4bbe4644853dab56e81e902ba133e063cc0db4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab147996e36a24c568d0bc9b4bbe4644853dab56e81e902ba133e063cc0db4c->enter($__internal_9ab147996e36a24c568d0bc9b4bbe4644853dab56e81e902ba133e063cc0db4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_08584446f500d0f32842ddf9836859aa9e03c04c8fe62c6b4b4fd7c53598afe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08584446f500d0f32842ddf9836859aa9e03c04c8fe62c6b4b4fd7c53598afe2->enter($__internal_08584446f500d0f32842ddf9836859aa9e03c04c8fe62c6b4b4fd7c53598afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_08584446f500d0f32842ddf9836859aa9e03c04c8fe62c6b4b4fd7c53598afe2->leave($__internal_08584446f500d0f32842ddf9836859aa9e03c04c8fe62c6b4b4fd7c53598afe2_prof);

        
        $__internal_9ab147996e36a24c568d0bc9b4bbe4644853dab56e81e902ba133e063cc0db4c->leave($__internal_9ab147996e36a24c568d0bc9b4bbe4644853dab56e81e902ba133e063cc0db4c_prof);

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
