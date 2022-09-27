from django_daraja.mpesa.core import MpesaClient
def index(request):
        cl = MpesaClient()
        phone_number = '0745092523'
        amount = 1
        account_reference = 'reference'
        transaction_desc = 'Description'
        callback_url = request.build_absolute_uri(reverse('mpesa_stk_push_callback'))
        response = cl.stk_push(phone_number, amount, account_reference, transaction_desc, callback_url)
        return HttpResponse(response)