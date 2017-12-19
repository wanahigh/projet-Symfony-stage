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
        $__internal_02457e74b558adff9c5153476685b9815c39246ae28eecf0490b56732f9a4464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02457e74b558adff9c5153476685b9815c39246ae28eecf0490b56732f9a4464->enter($__internal_02457e74b558adff9c5153476685b9815c39246ae28eecf0490b56732f9a4464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2ad07ea0c6e33ffaba25e80d9bee9df177f84d2a5ad28055a3b68299c509bc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad07ea0c6e33ffaba25e80d9bee9df177f84d2a5ad28055a3b68299c509bc9a->enter($__internal_2ad07ea0c6e33ffaba25e80d9bee9df177f84d2a5ad28055a3b68299c509bc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02457e74b558adff9c5153476685b9815c39246ae28eecf0490b56732f9a4464->leave($__internal_02457e74b558adff9c5153476685b9815c39246ae28eecf0490b56732f9a4464_prof);

        
        $__internal_2ad07ea0c6e33ffaba25e80d9bee9df177f84d2a5ad28055a3b68299c509bc9a->leave($__internal_2ad07ea0c6e33ffaba25e80d9bee9df177f84d2a5ad28055a3b68299c509bc9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49fa449e53c5091405e514a2aaf903b282c26391deb1cc3bfccb3447b4086351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fa449e53c5091405e514a2aaf903b282c26391deb1cc3bfccb3447b4086351->enter($__internal_49fa449e53c5091405e514a2aaf903b282c26391deb1cc3bfccb3447b4086351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_742cf493195419a8d27994ba262e1517b174e6c3f6814c96f98fb10c5f22df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742cf493195419a8d27994ba262e1517b174e6c3f6814c96f98fb10c5f22df01->enter($__internal_742cf493195419a8d27994ba262e1517b174e6c3f6814c96f98fb10c5f22df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_742cf493195419a8d27994ba262e1517b174e6c3f6814c96f98fb10c5f22df01->leave($__internal_742cf493195419a8d27994ba262e1517b174e6c3f6814c96f98fb10c5f22df01_prof);

        
        $__internal_49fa449e53c5091405e514a2aaf903b282c26391deb1cc3bfccb3447b4086351->leave($__internal_49fa449e53c5091405e514a2aaf903b282c26391deb1cc3bfccb3447b4086351_prof);

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
