$(function() {
  'use strict';

  if($('#datePickerExample').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#datePickerExample').datepicker({
      format: "yy/mm/dd",
      todayHighlight: true,
      autoclose: true
    });
    $('#datePickerExample').datepicker('setDate', today);
  }  
  if($('#datePickerExample1').length) {
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $('#datePickerExample1').datepicker({
      format: "yy/mm/dd",
      todayHighlight: true,
      autoclose: true
    });
    $('#datePickerExample1').datepicker('setDate', today);
  }
});