<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b0b62c2a463974e672c3f444e80020993e9e26580fdc9caf0969eee452a8da4b extends Twig_Template
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
        $__internal_7e15bd5e008a7dfd640a036ded2b95392232c68b7636aa5dce4dd5f1221c857b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e15bd5e008a7dfd640a036ded2b95392232c68b7636aa5dce4dd5f1221c857b->enter($__internal_7e15bd5e008a7dfd640a036ded2b95392232c68b7636aa5dce4dd5f1221c857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3f4fa6704a9054c78fa66bf22b7d6fc557b0097b8cf2611146348f93ad6645b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4fa6704a9054c78fa66bf22b7d6fc557b0097b8cf2611146348f93ad6645b7->enter($__internal_3f4fa6704a9054c78fa66bf22b7d6fc557b0097b8cf2611146348f93ad6645b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7e15bd5e008a7dfd640a036ded2b95392232c68b7636aa5dce4dd5f1221c857b->leave($__internal_7e15bd5e008a7dfd640a036ded2b95392232c68b7636aa5dce4dd5f1221c857b_prof);

        
        $__internal_3f4fa6704a9054c78fa66bf22b7d6fc557b0097b8cf2611146348f93ad6645b7->leave($__internal_3f4fa6704a9054c78fa66bf22b7d6fc557b0097b8cf2611146348f93ad6645b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
