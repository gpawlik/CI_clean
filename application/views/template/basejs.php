<script>
var BASE = (function(){
    var _baseUrl = "<?= base_url(); ?>";
    return{
        "language": "<?= $this->config->item('language'); ?>",
        "baseUrl": _baseUrl,
        "uri_segment_1": "<?= $uri_segment_1; ?>",
        "uri_segment_2": "<?= $uri_segment_2; ?>"
    };
})();
</script>
