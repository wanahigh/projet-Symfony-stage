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
        $__internal_f27f5fba9b477cd0a4e1c620c0534d24a3beef329da740be33b092e75fcf9293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27f5fba9b477cd0a4e1c620c0534d24a3beef329da740be33b092e75fcf9293->enter($__internal_f27f5fba9b477cd0a4e1c620c0534d24a3beef329da740be33b092e75fcf9293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_df65ef7bace16765f1e7ac84680a6e93b3d2def921527356ad2b2cd55b7c8d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df65ef7bace16765f1e7ac84680a6e93b3d2def921527356ad2b2cd55b7c8d11->enter($__internal_df65ef7bace16765f1e7ac84680a6e93b3d2def921527356ad2b2cd55b7c8d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f27f5fba9b477cd0a4e1c620c0534d24a3beef329da740be33b092e75fcf9293->leave($__internal_f27f5fba9b477cd0a4e1c620c0534d24a3beef329da740be33b092e75fcf9293_prof);

        
        $__internal_df65ef7bace16765f1e7ac84680a6e93b3d2def921527356ad2b2cd55b7c8d11->leave($__internal_df65ef7bace16765f1e7ac84680a6e93b3d2def921527356ad2b2cd55b7c8d11_prof);

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
