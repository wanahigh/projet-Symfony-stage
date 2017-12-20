<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2bce84114d955adafb80988aa6e6c11f4b07d5a44754459049f19bbf92a04438 extends Twig_Template
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
        $__internal_192eb0c4add9c670bb19ecaf378e65b9bb830c7f0b716eeee46d13759daf4af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192eb0c4add9c670bb19ecaf378e65b9bb830c7f0b716eeee46d13759daf4af4->enter($__internal_192eb0c4add9c670bb19ecaf378e65b9bb830c7f0b716eeee46d13759daf4af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0c573156a95846243a9f081a8a2564b143667208b8d3c5c03cade6638463264c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c573156a95846243a9f081a8a2564b143667208b8d3c5c03cade6638463264c->enter($__internal_0c573156a95846243a9f081a8a2564b143667208b8d3c5c03cade6638463264c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_192eb0c4add9c670bb19ecaf378e65b9bb830c7f0b716eeee46d13759daf4af4->leave($__internal_192eb0c4add9c670bb19ecaf378e65b9bb830c7f0b716eeee46d13759daf4af4_prof);

        
        $__internal_0c573156a95846243a9f081a8a2564b143667208b8d3c5c03cade6638463264c->leave($__internal_0c573156a95846243a9f081a8a2564b143667208b8d3c5c03cade6638463264c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
