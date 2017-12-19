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
        $__internal_fa23337e51a6cd6fc61558223447a3759142afb033d1a31e22e2ba4cc1b518a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa23337e51a6cd6fc61558223447a3759142afb033d1a31e22e2ba4cc1b518a7->enter($__internal_fa23337e51a6cd6fc61558223447a3759142afb033d1a31e22e2ba4cc1b518a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_72dec82f559d71ab2e45ceb1e1111915cd6a91114d9bff86402f8f04881725aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dec82f559d71ab2e45ceb1e1111915cd6a91114d9bff86402f8f04881725aa->enter($__internal_72dec82f559d71ab2e45ceb1e1111915cd6a91114d9bff86402f8f04881725aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fa23337e51a6cd6fc61558223447a3759142afb033d1a31e22e2ba4cc1b518a7->leave($__internal_fa23337e51a6cd6fc61558223447a3759142afb033d1a31e22e2ba4cc1b518a7_prof);

        
        $__internal_72dec82f559d71ab2e45ceb1e1111915cd6a91114d9bff86402f8f04881725aa->leave($__internal_72dec82f559d71ab2e45ceb1e1111915cd6a91114d9bff86402f8f04881725aa_prof);

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
