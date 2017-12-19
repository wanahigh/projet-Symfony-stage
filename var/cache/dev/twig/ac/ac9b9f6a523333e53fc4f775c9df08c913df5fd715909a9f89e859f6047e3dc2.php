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
        $__internal_8c4dfcd07500e8e46b24837ba1aa130899212fe0cde80838e08a710901972ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4dfcd07500e8e46b24837ba1aa130899212fe0cde80838e08a710901972ec3->enter($__internal_8c4dfcd07500e8e46b24837ba1aa130899212fe0cde80838e08a710901972ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f973ba427e5829de1272d717115ae9585a1e1dda595b453646a4ab08ff98bd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f973ba427e5829de1272d717115ae9585a1e1dda595b453646a4ab08ff98bd6b->enter($__internal_f973ba427e5829de1272d717115ae9585a1e1dda595b453646a4ab08ff98bd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8c4dfcd07500e8e46b24837ba1aa130899212fe0cde80838e08a710901972ec3->leave($__internal_8c4dfcd07500e8e46b24837ba1aa130899212fe0cde80838e08a710901972ec3_prof);

        
        $__internal_f973ba427e5829de1272d717115ae9585a1e1dda595b453646a4ab08ff98bd6b->leave($__internal_f973ba427e5829de1272d717115ae9585a1e1dda595b453646a4ab08ff98bd6b_prof);

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
