<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4822128f110c79cfa4fc06c797baaf5a1bb88fd6f7ec32a410c8a5f1a13dfa4a extends Twig_Template
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
        $__internal_71046718b7aac9942a8f5ede21b50f1e74dd903ea0ad3b62e852ee0f6d103904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71046718b7aac9942a8f5ede21b50f1e74dd903ea0ad3b62e852ee0f6d103904->enter($__internal_71046718b7aac9942a8f5ede21b50f1e74dd903ea0ad3b62e852ee0f6d103904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f15317d15d5d577cd1211590181c5ad9cd7f15b0f95e9b8497568fca4fe9d783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15317d15d5d577cd1211590181c5ad9cd7f15b0f95e9b8497568fca4fe9d783->enter($__internal_f15317d15d5d577cd1211590181c5ad9cd7f15b0f95e9b8497568fca4fe9d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_71046718b7aac9942a8f5ede21b50f1e74dd903ea0ad3b62e852ee0f6d103904->leave($__internal_71046718b7aac9942a8f5ede21b50f1e74dd903ea0ad3b62e852ee0f6d103904_prof);

        
        $__internal_f15317d15d5d577cd1211590181c5ad9cd7f15b0f95e9b8497568fca4fe9d783->leave($__internal_f15317d15d5d577cd1211590181c5ad9cd7f15b0f95e9b8497568fca4fe9d783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
