<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b9dc98a3bda9ef98121bf0d94aa51adcfd170c868e0d08a9d33bae0824d9d63c extends Twig_Template
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
        $__internal_eef56c11ce34c067d72b0b2e261ee532e85867b698f607b796d1750b67ec002e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef56c11ce34c067d72b0b2e261ee532e85867b698f607b796d1750b67ec002e->enter($__internal_eef56c11ce34c067d72b0b2e261ee532e85867b698f607b796d1750b67ec002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c2acdee96741c985cf92208a3d91010b9400e2b689b2f4b394881205e1c6d9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2acdee96741c985cf92208a3d91010b9400e2b689b2f4b394881205e1c6d9ca->enter($__internal_c2acdee96741c985cf92208a3d91010b9400e2b689b2f4b394881205e1c6d9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_eef56c11ce34c067d72b0b2e261ee532e85867b698f607b796d1750b67ec002e->leave($__internal_eef56c11ce34c067d72b0b2e261ee532e85867b698f607b796d1750b67ec002e_prof);

        
        $__internal_c2acdee96741c985cf92208a3d91010b9400e2b689b2f4b394881205e1c6d9ca->leave($__internal_c2acdee96741c985cf92208a3d91010b9400e2b689b2f4b394881205e1c6d9ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
