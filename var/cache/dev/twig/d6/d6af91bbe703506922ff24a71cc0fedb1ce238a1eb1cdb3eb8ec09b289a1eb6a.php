<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d4e5a30a3fb85996420d50dfce3d0ccaf879f513f7e9bc9c245689929e021b54 extends Twig_Template
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
        $__internal_ee9f3e28735be10096eed898332bea90a58ffe1abf98c7f65687f6496e98ad9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9f3e28735be10096eed898332bea90a58ffe1abf98c7f65687f6496e98ad9f->enter($__internal_ee9f3e28735be10096eed898332bea90a58ffe1abf98c7f65687f6496e98ad9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1f9b60e74d3922b826cbd3b4f57f2070aa1e80ed3f38ab702293bed46e8ba1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9b60e74d3922b826cbd3b4f57f2070aa1e80ed3f38ab702293bed46e8ba1a6->enter($__internal_1f9b60e74d3922b826cbd3b4f57f2070aa1e80ed3f38ab702293bed46e8ba1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ee9f3e28735be10096eed898332bea90a58ffe1abf98c7f65687f6496e98ad9f->leave($__internal_ee9f3e28735be10096eed898332bea90a58ffe1abf98c7f65687f6496e98ad9f_prof);

        
        $__internal_1f9b60e74d3922b826cbd3b4f57f2070aa1e80ed3f38ab702293bed46e8ba1a6->leave($__internal_1f9b60e74d3922b826cbd3b4f57f2070aa1e80ed3f38ab702293bed46e8ba1a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
