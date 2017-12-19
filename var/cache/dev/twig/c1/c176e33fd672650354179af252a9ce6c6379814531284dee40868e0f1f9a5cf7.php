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
        $__internal_ed52de176c925f0f36a3859aad3f5964e5046c3a9f1996279576e16572a0c7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed52de176c925f0f36a3859aad3f5964e5046c3a9f1996279576e16572a0c7e3->enter($__internal_ed52de176c925f0f36a3859aad3f5964e5046c3a9f1996279576e16572a0c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_d3cd958cb002182ede35382d74cd3f942b5fe2a8322bd93bdcfdd439b55ab4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cd958cb002182ede35382d74cd3f942b5fe2a8322bd93bdcfdd439b55ab4a1->enter($__internal_d3cd958cb002182ede35382d74cd3f942b5fe2a8322bd93bdcfdd439b55ab4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed52de176c925f0f36a3859aad3f5964e5046c3a9f1996279576e16572a0c7e3->leave($__internal_ed52de176c925f0f36a3859aad3f5964e5046c3a9f1996279576e16572a0c7e3_prof);

        
        $__internal_d3cd958cb002182ede35382d74cd3f942b5fe2a8322bd93bdcfdd439b55ab4a1->leave($__internal_d3cd958cb002182ede35382d74cd3f942b5fe2a8322bd93bdcfdd439b55ab4a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffb8e3205bf0f5266eea5ef60f3a47a78ae447886122aeb6f422821465461af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb8e3205bf0f5266eea5ef60f3a47a78ae447886122aeb6f422821465461af6->enter($__internal_ffb8e3205bf0f5266eea5ef60f3a47a78ae447886122aeb6f422821465461af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_966db9f688c92c6d3546c36e776a19b6e560f315b04b5d3dcc594517bc53e096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966db9f688c92c6d3546c36e776a19b6e560f315b04b5d3dcc594517bc53e096->enter($__internal_966db9f688c92c6d3546c36e776a19b6e560f315b04b5d3dcc594517bc53e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_966db9f688c92c6d3546c36e776a19b6e560f315b04b5d3dcc594517bc53e096->leave($__internal_966db9f688c92c6d3546c36e776a19b6e560f315b04b5d3dcc594517bc53e096_prof);

        
        $__internal_ffb8e3205bf0f5266eea5ef60f3a47a78ae447886122aeb6f422821465461af6->leave($__internal_ffb8e3205bf0f5266eea5ef60f3a47a78ae447886122aeb6f422821465461af6_prof);

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
