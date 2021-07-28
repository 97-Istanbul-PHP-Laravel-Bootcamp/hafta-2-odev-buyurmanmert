</div>
</div>
</section>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 Mert Buyurman Kodluyoruz Laravel Bootcamp</p>
        </div>
    </div>
</footer>
</div>
</div>
<script src="{{asset('back')}}/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="{{asset('back')}}/js/bootstrap.bundle.min.js"></script>


<script src="{{asset('back')}}/vendors/simple-datatables/simple-datatables.js"></script>
<script src="{{asset('back')}}/js/main.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>


<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<!--<script  type="text/javascript">
    $('.edit_click').click(function() {
        id = $(this)[0].getAttribute('user-id');
        $.ajax({
          type:'GET',
          url:'',
          data:{id:id},
          success:function(data){
            console.log(data);
          }
        });
    });
</script>-->

</body>

</html>
