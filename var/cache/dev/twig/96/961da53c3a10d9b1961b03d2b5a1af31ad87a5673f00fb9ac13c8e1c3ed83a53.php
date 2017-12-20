<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b37bc502eb42b863c78dba08d2e1f4ef1425c382d72819f82dc1e9257de360d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9d0f0bd07875ebdc2784cecec6bfb491933c082e0baaeef7db2ae06b7874a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9d0f0bd07875ebdc2784cecec6bfb491933c082e0baaeef7db2ae06b7874a33->enter($__internal_e9d0f0bd07875ebdc2784cecec6bfb491933c082e0baaeef7db2ae06b7874a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3fb4314d1c2efec0f0f9bbc7117443c266d4eb6af4a55e7ea6203fe0cac77106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb4314d1c2efec0f0f9bbc7117443c266d4eb6af4a55e7ea6203fe0cac77106->enter($__internal_3fb4314d1c2efec0f0f9bbc7117443c266d4eb6af4a55e7ea6203fe0cac77106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e9d0f0bd07875ebdc2784cecec6bfb491933c082e0baaeef7db2ae06b7874a33->leave($__internal_e9d0f0bd07875ebdc2784cecec6bfb491933c082e0baaeef7db2ae06b7874a33_prof);

        
        $__internal_3fb4314d1c2efec0f0f9bbc7117443c266d4eb6af4a55e7ea6203fe0cac77106->leave($__internal_3fb4314d1c2efec0f0f9bbc7117443c266d4eb6af4a55e7ea6203fe0cac77106_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
