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
        $__internal_385eee5399ee5d687c352983843f2289aef1b8d5e8ec26658d515da6870a131e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385eee5399ee5d687c352983843f2289aef1b8d5e8ec26658d515da6870a131e->enter($__internal_385eee5399ee5d687c352983843f2289aef1b8d5e8ec26658d515da6870a131e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4fad37c6f1c00c6c7d157e41b85456e294e248a27ed92ab256d8feefb1a398c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fad37c6f1c00c6c7d157e41b85456e294e248a27ed92ab256d8feefb1a398c5->enter($__internal_4fad37c6f1c00c6c7d157e41b85456e294e248a27ed92ab256d8feefb1a398c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385eee5399ee5d687c352983843f2289aef1b8d5e8ec26658d515da6870a131e->leave($__internal_385eee5399ee5d687c352983843f2289aef1b8d5e8ec26658d515da6870a131e_prof);

        
        $__internal_4fad37c6f1c00c6c7d157e41b85456e294e248a27ed92ab256d8feefb1a398c5->leave($__internal_4fad37c6f1c00c6c7d157e41b85456e294e248a27ed92ab256d8feefb1a398c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff9be8fff804ac3ceecff28562f1d478d0bcb3520064efae0b3906433049a9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9be8fff804ac3ceecff28562f1d478d0bcb3520064efae0b3906433049a9a0->enter($__internal_ff9be8fff804ac3ceecff28562f1d478d0bcb3520064efae0b3906433049a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bebaf5872e125c2e883a12ea022f6a9539df246cc82d7c296ce62dd0a96c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bebaf5872e125c2e883a12ea022f6a9539df246cc82d7c296ce62dd0a96c63e->enter($__internal_2bebaf5872e125c2e883a12ea022f6a9539df246cc82d7c296ce62dd0a96c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2bebaf5872e125c2e883a12ea022f6a9539df246cc82d7c296ce62dd0a96c63e->leave($__internal_2bebaf5872e125c2e883a12ea022f6a9539df246cc82d7c296ce62dd0a96c63e_prof);

        
        $__internal_ff9be8fff804ac3ceecff28562f1d478d0bcb3520064efae0b3906433049a9a0->leave($__internal_ff9be8fff804ac3ceecff28562f1d478d0bcb3520064efae0b3906433049a9a0_prof);

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
