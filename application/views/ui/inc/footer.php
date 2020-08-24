</div>

<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/ui/assets/libs/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/ui/dist/js/materialize.min.js') ?>"></script>
<script src="<?= base_url('assets/ui/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') ?>"></script>
<!-- ============================================================== -->
<!-- Apps -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/ui/dist/js/app.js') ?>"></script>
<script src="<?= base_url('assets/ui/dist/js/app.init.iconbar.js') ?>"></script>
<script src="<?= base_url('assets/ui/dist/js/app-style-switcher.js') ?>"></script>
<!-- ============================================================== -->
<!-- Custom js -->
<!-- ============================================================== -->
<script src="<?= base_url('assets/ui/dist/js/custom.min.js') ?>"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<script src="<?= base_url('assets/js/jquery.tabledit.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jspdf.min.js') ?>"></script>
<script src="<?= base_url('assets/ui/assets/libs/toastr/build/toastr.min.js') ?>"></script>
<script src="<?= base_url('assets/ui/assets/extra-libs/c3/d3.min.js"') ?>"></script>
<script src="<?= base_url('assets/ui/assets/extra-libs/c3/c3.min.js"') ?>"></script>
<script>
    $(document).ready(function() {
        $lists = {};
        $.ajax({
            url: "test",
            success: function(data) {
                $('input.autoc').autocomplete({
                    data: JSON.parse(data),
                    onSelect: function(dat) {
                        console.log(dat);
                    }
                });
                console.log(data);
                $lists = JSON.parse(data);
                console.log($lists);
            },
        }).done((data) => {});

        function print() {
            const filename = 'ReportSheet.pdf';

            html2canvas(document.querySelector('#rssh'), {
                scale: 4
            }).then(canvas => {
                let pdf = new jsPDF('p', 'mm', 'a4');
                pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 211, 298);
                pdf.save(filename);
            });
        }
        // var prin = document.getElementById('pdf');
        // prin.addEventListener('click', print());
        // setTimeout(print(),10000);

    });


    var error = '<?= $err ?>';
    if (error != null || '') {
        toastr.warning(error, '', {
            "progressBar": true
        });
    };

    $('#editscore').Tabledit({
        url: 'example',
        inputClass: 'size',
        editButton: false,
        deleteButton: false,
        hideIdentifier: false,
        columns: {
            identifier: [0, 'id'],
            editable: [
                [3, 'subjCAT'],
                [4, 'subjEXAM']
            ]
        },
        onDraw() {
            console.log('hello');
        }
    });
</script>
<!-- ============================================================== -->
</body>

</html>