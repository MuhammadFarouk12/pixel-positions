<x-layout>
	<x-page-heading>Login</x-page-heading>
	<x-forms.form class="form" method="POST" action="/login">
		<x-forms.input name="email" label="Email" type="email"/>
		<x-forms.input name="password" label="Password" type="password"/>

		<x-forms.divider/>

		<x-forms.button class="button">Create Account</x-forms.button>
	</x-forms.form>
</x-layout>
