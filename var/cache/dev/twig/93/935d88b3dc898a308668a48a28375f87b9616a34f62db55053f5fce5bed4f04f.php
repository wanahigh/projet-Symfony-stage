<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
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
        $__internal_fdde8333ab8bb0cc2e99f40c4fe379fb58142ef5a1d8bea17b08b51a7fd73b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdde8333ab8bb0cc2e99f40c4fe379fb58142ef5a1d8bea17b08b51a7fd73b4a->enter($__internal_fdde8333ab8bb0cc2e99f40c4fe379fb58142ef5a1d8bea17b08b51a7fd73b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_52c1bee66c03a71c730902ee053d0c9c96c62924a31bc1e199f0543dddb4d97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c1bee66c03a71c730902ee053d0c9c96c62924a31bc1e199f0543dddb4d97d->enter($__internal_52c1bee66c03a71c730902ee053d0c9c96c62924a31bc1e199f0543dddb4d97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fdde8333ab8bb0cc2e99f40c4fe379fb58142ef5a1d8bea17b08b51a7fd73b4a->leave($__internal_fdde8333ab8bb0cc2e99f40c4fe379fb58142ef5a1d8bea17b08b51a7fd73b4a_prof);

        
        $__internal_52c1bee66c03a71c730902ee053d0c9c96c62924a31bc1e199f0543dddb4d97d->leave($__internal_52c1bee66c03a71c730902ee053d0c9c96c62924a31bc1e199f0543dddb4d97d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
