<x-layout>
    <x-slot:title>
        BJCP Written Exam Generator
    </x-slot>
    <h1 class="text-3xl py-2 font-bold">BJCP Written Exam Generator</h1>
    <h2 class="text-2xl py-2 font-bold">Section 1 (BJCP/Ethics/Judging Process)</h2>
    <h3 class="text-1xl py-2 font-bold">Judging Process & Ethics</h2>
    <p class="py-2">The questions in Section 1 are remedial for a BJCP judge eligible to takis this exam.
        Any judge National or higher judger should know this stuff.
        It should take almos no time to answer there questions.
        <strong>You got no additional credit for getting the answers corret but you can lose up to 10% of your essay score if you get them all wrong</strong>
    </p>
    <p class="py-2"><strong>For the folowing 20 questions, select "T" if the statement is true or "F" if the statement is false.</strong></p>
    <livewire:exam />
    <h2 class="text-2xl py-2 font-bold">Section 2 (Styles/Brewing Techniques)</h2>
    <p></p>
    <h3 class="text-1xl py-2 font-bold">Beer Style Questions</h3>
    <x-beer-comparison>
            <x-slot:id>
                1
            </x-slot>
            {{ $beerStylesComparison[0] }}
    </x-beer-comparison>
    <div>
        <p class="my-6">2. Provide a complete ALL-GRAIN recipe and procedure for brewing a(n) <strong>{{ $beerRecipeStyle }}</strong>. Please use the table below to help organize your response.</p>
        <table class="border-collapse table-auto w-full border-slate-500 ">
            <tbody>
                <tr>
                    <td class="border p-1">15%</td>
                    <td class="border p-1">Style Description: Provide a brief description of the of the target style according to the 2021 BJCP Style Guidelines.</td>
                </tr>
                <tr>
                    <td class="border p-1">15%</td>
                    <td class="border p-1">Provide the target parameters for your recipe, including starting batch size, specific gravity (OG), final specific gravity (FG), and bitterness in IBUs or HBUs, and color (SRM or a textual description).</td>
                </tr>
                <tr>
                    <td class="border p-1">40%</td>
                    <td class="border p-1">List the ingredients, explain why they are appropriate for target style, provide their quantities, and explain how the quantities were calculated.</td>
                </tr>
                <tr>
                    <td class="border p-1">30%</td>
                    <td class="border p-1">Discuss the complete brewing procedure from mashing through packaging, and give style-based reasoning to support each aspect of the process.</td>
                </tr>
            </table>
        </div>
    </div>
    <x-beer-comparison>
            <x-slot:id>
                3
            </x-slot>
            {{ $beerStylesComparison[1] }}
    </x-beer-comparison>
    <div>
        <p class="my-6">4. Describe and discuss the following beer characteristics: <strong>{{ implode(', ', $beerCharacteristics) }}</strong>. Your answer should address the following topics:</p>
        <table class="border-collapse table-auto w-full border-slate-500 ">
            <tbody>
                <tr>
                    <td class="border p-1">30%</td>
                    <td class="border p-1">Describe each characteristic and how it is perceived.</td>
                </tr>
                <tr>
                    <td class="border p-1">40%</td>
                    <td class="border p-1">Identify the causes and controls for each characteristic.</td>
                </tr>
                <tr>
                    <td class="border p-1">30%</td>
                    <td class="border p-1">Identify styles in which each characteristic is appropriate and inappropriate.</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
