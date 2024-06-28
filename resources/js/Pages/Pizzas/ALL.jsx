import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Table from "@/Components/Table.jsx";

const columns = [
    'size',
    'chef',
    'status'
];

export default function All(props) {
    const { pizzas } = props; // Asegúrate de que pizzas venga de props

    return (
        <AuthenticatedLayout
            auth={props.auth}
            // errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">ALL Pizzas</h2>}
        >
            <Head title="All Pizzas" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <Table items={pizzas} columns={columns} primary="Order Number" action="pizzas.edit"></Table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
