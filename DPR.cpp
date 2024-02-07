// Import Library
#include <iostream>
#include <string>

// Using standard namespace
using namespace std;

// Class declaration, For C++, the first letter doesn't have to be
// capitalized, but it's better so we can distinguish it with the other types
class DPR
{
    // Private attribute
    private:
        string id;
        string nama;
        string bidang;
        string partai;

    // Public methods
    public:
    /* CONSTRUCTORS*/
    DPR()
    {
        // Set name and gender to default value
        this->id = "";
        this->nama = "";
        this->bidang = "";
        this->partai = "";
    }

    DPR(string id, string nama, string bidang, string partai)
    {
        // "This" object's attributes will be set with the given parameter attributes
        this->id = id;
        this->nama = nama;
        this->bidang = bidang;
        this->partai = partai;
    }

    /* GETTER AND SETTER */

    // Get ID
    string get_id() const
    {
        return this->id;
    }
    // Set ID
    void set_id(string id)
    {
        this->id = id;
    }

    // Get nama
    string get_nama() const
    {
        return this->nama;
    }
    // Set nama
    void set_nama(string nama)
    {
        this->nama = nama;
    }

    // Get bidang
    string get_bidang() const
    {
        return this->bidang;
    }
    // Set bidang
    void set_bidang(string bidang)
    {
        this->bidang = bidang;
    }

    // Get partai
    string get_partai() const
    {
        return this->partai;
    }
    // Set name
    void set_partai(string partai)
    {
        this->partai = partai;
    }

    /* DESTRUCTORS */
    // Default constructor. Leave it blank for now
    ~DPR()
    {
    }

    // Menambah anggota DPR
    void tambahAnggota(list<DPR>& anggotaDPRList)
    {
        string id, nama, bidang, partai;

        cout << "Masukkan ID anggota: ";
        cin >> id;
        cin.ignore();
        cout << "Masukkan nama anggota: ";
        getline(cin, nama);
        cout << "Masukkan bidang anggota: ";
        getline(cin, bidang);
        cout << "Masukkan partai anggota: ";
        getline(cin, partai);

        anggotaDPRList.emplace_back(id, nama, bidang, partai);
        cout << "Anggota DPR berhasil ditambahkan.\n";
    }

    // Mengubah anggota DPR
    void ubahAnggota(list<DPR>& anggotaDPRList)
    {
        string id, nama, bidang, partai;

        cout << "Masukkan ID anggota yang ingin diubah: ";
        cin >> id;
        cin.ignore();

        bool ditemukan = false;
        for (auto &anggota : anggotaDPRList)
        {
            if (anggota.get_id() == id)
            {
                ditemukan = true;
                cout << "Masukkan nama anggota: ";
                getline(cin, nama);
                cout << "Masukkan bidang anggota: ";
                getline(cin, bidang);
                cout << "Masukkan partai anggota: ";
                getline(cin, partai);

                anggota.set_nama(nama);
                anggota.set_bidang(bidang);
                anggota.set_partai(partai);
                cout << "Anggota DPR berhasil diubah.\n";
                break;
            }
        }
        if (!ditemukan)
        {
            cout << "ID anggota tidak ditemukan.\n";
        }
    }

    // Menghapus anggota DPR
    void hapusAnggota(list<DPR>& anggotaDPRList)
    {
        string id;

        cout << "Masukkan ID anggota yang ingin dihapus: ";
        cin >> id;

        anggotaDPRList.remove_if([id](const DPR &anggota) { return anggota.get_id() == id; });
        cout << "Anggota DPR berhasil dihapus.\n";
    }

    // Menampilkan daftar anggota DPR
    void tampilkanDaftarAnggota(list<DPR>& anggotaDPRList) {
        cout << "Daftar Anggota DPR:\n";
        for (auto &anggota : anggotaDPRList) {
            cout << anggota.get_id() << ". Nama: " << anggota.get_nama() << ", Bidang: " << anggota.get_bidang() << ", Partai: " << anggota.get_partai() << '\n';
        }
    }
};