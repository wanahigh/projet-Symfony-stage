<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_55c88b9f65861744c88b2be7fc5f2edd9b88e5bbdfcf50145ce52f174b8871e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_b69ec6f6067fa26d1d1656b1d50d414e89970038eaab9e899a52648231baa41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69ec6f6067fa26d1d1656b1d50d414e89970038eaab9e899a52648231baa41f->enter($__internal_b69ec6f6067fa26d1d1656b1d50d414e89970038eaab9e899a52648231baa41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_39a374d70a477af25d4be2a4de054f1f12e3e54feaeca749cd2f4a4ced317ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a374d70a477af25d4be2a4de054f1f12e3e54feaeca749cd2f4a4ced317ff6->enter($__internal_39a374d70a477af25d4be2a4de054f1f12e3e54feaeca749cd2f4a4ced317ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69ec6f6067fa26d1d1656b1d50d414e89970038eaab9e899a52648231baa41f->leave($__internal_b69ec6f6067fa26d1d1656b1d50d414e89970038eaab9e899a52648231baa41f_prof);

        
        $__internal_39a374d70a477af25d4be2a4de054f1f12e3e54feaeca749cd2f4a4ced317ff6->leave($__internal_39a374d70a477af25d4be2a4de054f1f12e3e54feaeca749cd2f4a4ced317ff6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8075779e664cbfe37209d6090a7c28cac28bd1197b85c6ee42129fa7ba09fbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8075779e664cbfe37209d6090a7c28cac28bd1197b85c6ee42129fa7ba09fbb6->enter($__internal_8075779e664cbfe37209d6090a7c28cac28bd1197b85c6ee42129fa7ba09fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99d990d5fd6e7cf3cccf19f4d7953cc8d97b3aa51286e91588e6f125f52d8758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d990d5fd6e7cf3cccf19f4d7953cc8d97b3aa51286e91588e6f125f52d8758->enter($__internal_99d990d5fd6e7cf3cccf19f4d7953cc8d97b3aa51286e91588e6f125f52d8758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_99d990d5fd6e7cf3cccf19f4d7953cc8d97b3aa51286e91588e6f125f52d8758->leave($__internal_99d990d5fd6e7cf3cccf19f4d7953cc8d97b3aa51286e91588e6f125f52d8758_prof);

        
        $__internal_8075779e664cbfe37209d6090a7c28cac28bd1197b85c6ee42129fa7ba09fbb6->leave($__internal_8075779e664cbfe37209d6090a7c28cac28bd1197b85c6ee42129fa7ba09fbb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
